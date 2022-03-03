@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Dashboard</span>
        </li>
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

    <div class="row">
        @foreach ($jpb as $row)
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div class="pb-3">
                            <div class="fs-4 fw-semibold">
                                JPB {{ $row->kd_jbp }} <span class="fs-6 fw-normal">({{$row->jml_pendataan}})</span>
                            </div>
                            <div class="fw-normal fs-6">{{ $row->nama_jpb }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
