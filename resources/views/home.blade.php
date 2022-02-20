@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Dashboard</span>
        </li>
        {{-- <li class="breadcrumb-item active">
            <span>Dashboard</span>
        </li> --}}
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Dashboard') }}
        </div>
        <div class="card-body">
            {{ __('Selamat Datang!') }}
        </div>
    </div>
@endsection
