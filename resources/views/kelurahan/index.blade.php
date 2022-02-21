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
            @can('client-create')
                <a class="btn btn-success float-end" href="{{ route('clients.create') }}"> Create New Client</a>
            @endcan
        </div>

        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div id="response"></div>
                </div>
            </div>

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
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">Tambah Kecamatan</h5>
                    <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formsTambahKecamatan">
                        <div class="mb-1">
                            <label class="col-form-label" for="recipient-name">Kode Kecamatan</label>
                            <input class="form-control" id="kd_kecamatan" name="kd_kecamatan" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama Kecamatan</label>
                            <input class="form-control" id="nama_kecamatan" name="nama_kecamatan" type="text">
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
