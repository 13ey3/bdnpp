@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Resorces</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Daftar Harga Resorce') }}
            @can('client-create')
                <a class="btn btn-success float-end" href="{{ route('clients.create') }}"> Create New Client</a>
            @endcan
        </div>

        <div class="card-body">

        </div>
    </div>
@endsection
