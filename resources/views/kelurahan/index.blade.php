@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Kelurahan</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Daftar Kelurahan') }}
            @can('kelurahan-tambah')
                <button class="btn btn-success btn-sm float-end" type="button" data-coreui-toggle="modal"
                    data-coreui-target="#modalTambahKelurahan"><svg class="icon me-0">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-plus') }}"></use>
                    </svg> Tambah</button>
            @endcan
        </div>

        <div class="card-body">
            <input type="hidden" value="{{ is_null($pemda) ? '' : $pemda->kd_provinsi }}" id="kd_provinsi">
            <input type="hidden" value="{{ is_null($pemda) ? '' : $pemda->kd_dati }}" id="kd_dati">
            <div id="alert_message"></div>

            <table class="table table-striped table-bordered table-sm" id="kelurahan-table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light text-center">No</th>
                        <th class="text-light text-left">Kecamatan</th>
                        <th class="text-light text-left">Kode Kelurahan</th>
                        <th class="text-light text-left">Nama Kecamatan</th>
                        <th class="text-light text-center" style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalTambahKelurahan" data-coreui-backdrop="static" data-coreui-keyboard="false"
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
                            <label class="col-form-label" for="recipient-name">Kecamatan</label>
                            <select class="form-select" name="kd_kecamatan" id="kd_kecamatan">
                                <option value="">Pilih</option>
                                @foreach ($kecamatans as $kecamatan)
                                    <option value="{{ $kecamatan->kd_kecamatan }}">{{ $kecamatan->kd_kecamatan .' || '.$kecamatan->nama_kecamatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kode Kecamatan</label>
                            <input class="form-control" id="kd_kelurahan" name="kd_kelurahan" type="text" maxlength="3">
                            <div class="invalid-feedback" id="kd_kelurahan_error"></div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Kecamatan</label>
                            <input class="form-control" id="nama_kelurahan" name="nama_kelurahan" type="text">
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

    <div class="modal fade" id="modalEditKelurahan" data-coreui-backdrop="static" data-coreui-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">Edit Kecamatan</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahKelurahan" action="" method="POST">
                        <input type="hidden" name="kecamatan_id_edit" id="kelurahan_id_edit">
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kecamatan</label>
                            <select class="form-select" name="kd_kecamatan" id="kd_kecamatan">
                                <option value="">Pilih</option>
                                @foreach ($kecamatans as $kecamatan)
                                    <option value="{{ $kecamatan->kd_kecamatan }}">{{ $kecamatan->kd_kecamatan .' || '.$kecamatan->nama_kecamatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kode Kecamatan</label>
                            <input class="form-control" id="kd_kelurahan_edit" name="kd_kelurahan_edit" type="text">
                            <div class="invalid-feedback" id="kd_kecamatan_error"></div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Kecamatan</label>
                            <input class="form-control" id="nama_kelurahan_edit" name="nama_kelurahan_edit" type="text">
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

        var kelurahanTable = $('#kelurahan-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('kelurahan.getDT') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false
                },
                {
                    data: 'nama_kecamatan',
                    name: 'nama_kecamatan',
                    className: 'text-center'
                },
                {
                    data: 'kd_kelurahan',
                    name: 'kd_kelurahan',
                    className: 'text-center'
                },
                {
                    data: 'nama_kelurahan',
                    name: 'nama_kelurahan'
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
                            kelurahanTable.ajax.reload();
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
                url: '{!! route('kelurahan.getById') !!}',
                type: 'POST',
                data: {
                    id: id
                },
                success: function(res) {
                    $("#kecamatan_id_edit").val(res.id)
                    $("#kd_kecamatan_edit").val(res.kd_kecamatan)
                    $("#nama_kecamatan_edit").val(res.nama_kecamatan)
                    $("#modalEditKelurahan").modal('show');
                },
                error: function(res) {
                    alert(res);
                }
            });
        });

        $("input[name=kd_kelurahan]").on('change', async () => {
            let idKelurahan = $("#kd_provinsi").val() + $("#kd_dati").val() + $("#kd_kecamatan")
                .val() + $("#kd_kelurahan").val();
            
            let a = await getDatas(idKelurahan,
                '{{ url('wilayah-indonesia/village') }}')
            if (a !== undefined) {
                $('#nama_kelurahan').val(a.name)
            } else {
                $('#nama_kelurahan').val('')
            }
        })

        $("#btnSimpan").click(function(e) {
            e.preventDefault();
            var kd_kecamatan = $("#kd_kecamatan").val();
            var kd_kelurahan = $("input[name=kd_kelurahan]").val();
            var nama_kelurahan = $("input[name=nama_kelurahan]").val();
            var url = '{{ url('kelurahan/store') }}';

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    kd_kecamatan: kd_kecamatan,
                    kd_kelurahan: kd_kelurahan,
                    nama_kelurahan: nama_kelurahan
                },
                success: function(response) {
                    console.log();
                    showAlert(response.success, 'success', document.getElementById('alert_message'));
                    $("#modalTambahKelurahan").modal('hide');
                    kelurahanTable.ajax.reload()
                },
                error: function(response) {
                    let errors = response.responseJSON.errors
                    $("#modalTambahKelurahan").modal('hide');

                    if (typeof errors.nama_kelurahan !== undefined) {
                        showAlert('Nama Desa/Kelurahan tidak boleh kosong!', 'warning', document
                            .getElementById('alert_message'));
                    }

                    if (typeof errors.kd_kelurahan !== undefined) {
                        showAlert('Nama Desa/Kelurahan tidak boleh kosong, berisi 3 digit san berisi angka!',
                            'warning', document.getElementById('alert_message'));
                    }

                }
            });
        });

        $("#btnUpdate").click(function(e) {
            e.preventDefault();
            var id = $("#kelurahan_id_edit").val();
            var kd_kecamatan = $("input[name=kd_kecamatan]").val();
            var kd_kelurahan = $("input[name=kd_kelurahan]").val();
            var nama_kelurahan = $("input[name=nama_kelurahan]").val();
            var url = '{{ url('kecamatan/update') }}';

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    id: id,
                    kd_kecamatan: kd_kecamatan,
                    kd_kelurahan: kd_kelurahan,
                    nama_kelurahan: nama_kelurahan
                },
                success: function(response) {
                    showAlert(response.success, 'success', document.getElementById('alert_message'));
                    $("#modalEditKelurahan").modal('hide');
                    kelurahanTable.ajax.reload()
                },
                error: function(response) {
                    let errors = response.responseJSON.errors
                    $("#modalEditKelurahan").modal('hide');

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
