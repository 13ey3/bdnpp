@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Desa/Kelurahan</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Dafatr Desa/Kelurahan') }}
            @can('kelurahan-tambah')
                <button class="btn btn-success float-end" type="button" data-coreui-toggle="modal"
                    data-coreui-target="#modalTambahKelurahan"><svg class="icon me-0">
                        <use xlink:href="{{ asset('icons/coreui.svg#cil-plus') }}"></use>
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

    <div class="modal fade" id="modalTambahKelurahan" data-coreui-backdrop="static" data-coreui-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">Tambah Desa/Kelurahan</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formsTambahKecamatan">
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kode Desa/Kelurahan</label>
                            <input class="form-control" id="kd_kelurahan" name="kd_kelurahan" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Desa/Kelurahan</label>
                            <input class="form-control" id="nama_kelurahan" name="nama_kelurahan" type="text">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="button">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#kecamatan-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('clients.getDT') !!}',
                columns: [{
                        data: 'id',
                        name: 'id',
                        className: 'text-center'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'detail',
                        name: 'detail'
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
                        url: '{!! route('clients.delete.ajax') !!}',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(res) {
                            if (res.status == 1) {
                                show_success_alert("#response", res.msg);
                                $('#client-table').DataTable().ajax.reload();
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
        });
    </script>
@endpush
