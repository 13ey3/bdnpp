@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Perekaman Data</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Daftar Perekaman Data ') }}
            @can('client-create')
                <a class="btn btn-success float-end" href="{{ route('perekaman-data.create') }}"> Entri</a>
            @endcan
        </div>

        <div class="card-body">
            <div id="alert_message"></div>

            <table class="table table-striped table-bordered table-sm" id="lspop-table">
                <thead>
                    <tr class="bg-info">
                        <th class="text-light text-center">No</th>
                        <th class="text-light text-left">Nama</th>
                        <th class="text-light text-center">NOP</th>
                        <th class="text-light text-center">JPB</th>
                        <th class="text-light text-center" style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
