@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Clients</span>
        </li>
        {{-- <li class="breadcrumb-item active">
            <span>Dashboard</span>
        </li> --}}
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Clients : with Ajax DataTable (yajra/laravel-datatables-oracle) ') }}
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

            <table class="table table-striped table-sm" id="client-table">
                <thead>
                    <tr class="bg-primary">
                        <th class="text-light text-center">No</th>
                        <th class="text-light text-left">Name</th>
                        <th class="text-light text-left">Details</th>
                        <th class="text-light text-center" style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#client-table').DataTable({
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
@endsection
