@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Kecamatan</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Daftar Kecamatan') }}
            @can('kecamatan-tambah')
                <button class="btn btn-success btn-sm float-end" type="button" data-coreui-toggle="modal"
                    data-coreui-target="#modalTambahKecamatan"><svg class="icon me-0">
                        <use xlink:href="{{ asset('coreui.svg#cil-plus') }}"></use>
                    </svg> Tambah</button>
            @endcan
        </div>

        <div class="card-body">
            <input type="hidden" value="{{ is_null($pemda) ? '' : $pemda->kd_provinsi }}" id="kd_provinsi">
            <input type="hidden" value="{{ is_null($pemda) ? '' : $pemda->kd_dati }}" id="kd_dati">
            <div id="alert_message"></div>

            <table class="table table-striped table-bordered table-sm" id="kecamatan-table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light text-center">No</th>
                        <th class="text-light text-left">Kode Kecamatan</th>
                        <th class="text-light text-left">Nama Kecamatan</th>
                        <th class="text-light text-center" style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalTambahKecamatan" data-coreui-backdrop="static" data-coreui-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">Tambah Kecamatan</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahKecamatan" action="" method="POST">
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kode Kecamatan</label>
                            <input class="form-control" id="kd_kecamatan" name="kd_kecamatan" type="text">
                            <div class="invalid-feedback" id="kd_kecamatan_error"></div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Kecamatan</label>
                            <input class="form-control" id="nama_kecamatan" name="nama_kecamatan" type="text">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button" id="btnSimpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditKecamatan" data-coreui-backdrop="static" data-coreui-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">Edit Kecamatan</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahKecamatan" action="" method="POST">
                        <input type="hidden" name="kecamatan_id_edit" id="kecamatan_id_edit">
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kode Kecamatan</label>
                            <input class="form-control" id="kd_kecamatan_edit" name="kd_kecamatan" type="text">
                            <div class="invalid-feedback" id="kd_kecamatan_error"></div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Kecamatan</label>
                            <input class="form-control" id="nama_kecamatan_edit" name="nama_kecamatan" type="text">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button" id="btnUpdate">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const getDatas = (id, urlTarget) => {
            return fetch(`${urlTarget}/${id}.json`)
                .then(res => res.json())
                .then(data => data)
                .catch(err => console.log(err))
        }
        var kecamatanTable = $('#kecamatan-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('kecamatan.getDT') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false
                },
                {
                    data: 'kd_kecamatan',
                    name: 'kd_kecamatan',
                    className: 'text-center'
                },
                {
                    data: 'nama_kecamatan',
                    name: 'nama_kecamatan'
                },
                {
                    data: 'action',
                    name: 'action',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
            ]
        });


        $('tbody').on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).data('id')
            var r = confirm("Delete Record ?");
            if (r == true) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                $.ajax({
                    url: '{!! route('kecamatan.delete') !!}',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(res) {
                        if (res.status == 1) {
                            showAlert(res.msg, 'success', document.getElementById('alert_message'));
                            kecamatanTable.ajax.reload();
                        } else {
                            show_error_alert("#add_response", res.msg);
                        }
                    },
                    error: function(res) {
                        alert(data);
                    }
                });
            }
        });

        $('tbody').on('click', '.edit', function(e) {
            e.preventDefault();
            let id = $(this).data('id')
            console.log(id);

            $.ajax({
                url: '{!! route('kecamatan.getById') !!}',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(res) {
                    $("#kecamatan_id_edit").val(res.id)
                    $("#kd_kecamatan_edit").val(res.kd_kecamatan)
                    $("#nama_kecamatan_edit").val(res.nama_kecamatan)
                    $("#modalEditKecamatan").modal('show');
                },
                error: function(res) {
                    alert(res);
                }
            });
        });

        $("input[name=kd_kecamatan]").on('change', async () => {
            let idKecmanatan = $("#kd_provinsi").val() + $("#kd_dati").val() + $("#kd_kecamatan")
                .val();
            console.log($("#kd_provinsi").val());
            let a = await getDatas(idKecmanatan,
                '{{ url('wilayah-indonesia/district') }}')
            if (a !== undefined) {
                $('#nama_kecamatan').val(a.name)
            } else {
                $('#nama_kecamatan').val('')
            }
        })

        $("#btnSimpan").click(function(e) {
            e.preventDefault();
            var kd_kecamatan = $("input[name=kd_kecamatan]").val();
            var nama_kecamatan = $("input[name=nama_kecamatan]").val();
            var url = '{{ url('kecamatan/store') }}';

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    kd_kecamatan: kd_kecamatan,
                    nama_kecamatan: nama_kecamatan
                },
                success: function(response) {
                    console.log();
                    showAlert(response.success, 'success', document.getElementById('alert_message'));
                    $("#modalTambahKecamatan").modal('hide');
                    kecamatanTable.ajax.reload()
                },
                error: function(response) {
                    let errors = response.responseJSON.errors
                    $("#modalTambahKecamatan").modal('hide');

                    if (typeof errors.nama_kecamatan !== undefined) {
                        showAlert('Nama Kecamatan tidak boleh kosong!', 'warning', document
                            .getElementById('alert_message'));
                    }

                    if (typeof errors.kd_kecamatan !== undefined) {
                        showAlert('Nama Kecamatan tidak boleh kosong, berisi 3 digit san berisi angka!',
                            'warning', document.getElementById('alert_message'));
                    }

                }
            });
        });

        $("#btnUpdate").click(function(e) {
            e.preventDefault();
            var id = $("#kecamatan_id_edit").val();
            var kd_kecamatan = $("#kd_kecamatan_edit").val();
            var nama_kecamatan = $("#nama_kecamatan_edit").val();
            var url = '{{ url('kecamatan/update') }}';

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    id: id,
                    kd_kecamatan: kd_kecamatan,
                    nama_kecamatan: nama_kecamatan
                },
                success: function(response) {
                    showAlert(response.success, 'success', document.getElementById('alert_message'));
                    $("#modalEditKecamatan").modal('hide');
                    kecamatanTable.ajax.reload()
                },
                error: function(response) {
                    let errors = response.responseJSON.errors
                    $("#modalEditKecamatan").modal('hide');

                    if (typeof errors.nama_kecamatan !== undefined) {
                        showAlert('Nama Kecamatan tidak boleh kosong!', 'warning', document
                            .getElementById('alert_message'));
                    }

                    if (typeof errors.kd_kecamatan !== undefined) {
                        showAlert('Nama Kecamatan tidak boleh kosong, berisi 3 digit san berisi angka!',
                            'warning', document.getElementById('alert_message'));
                    }

                }
            });
        });


        function showAlert(message, type, target) {
            let wrapper = document.createElement('div')

            wrapper.innerHTML = `<div class="alert alert-${type} alert-dismissible" role="alert">
                                <div class="fw-semibold">${message}</div>
                                <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
                            </div>`;
            target.append(wrapper);
            hideAlert()
        }

        function hideAlert() {
            let alrerts = document.querySelectorAll('.alert');

            setTimeout(() => {
                alrerts.forEach(alert => {
                    alert.remove()
                });
            }, 3000);
        }
    </script>
@endpush
