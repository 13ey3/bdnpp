@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <span>Perekaman Data</span>
        </li>
        <li class="breadcrumb-item active">
            <span>Tambah</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div id="smartwizard">
            <ul class="nav">
                <li>
                    <a class="nav-link" href="#step-1">
                        Identitas Objek
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-2">
                        Komponen Utama
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-3">
                        Komponen Fasilitas
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-4">
                        Komponen Tambahan
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="step-1" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <label class="form-label col-md-2">Jenis Transaksi</label>
                        <div class="col-md-6">
                            <select name="jenis_transaksi" id="jenis_transaksi" class="form-select">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">NOP</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Jumlah Bngunan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Bangunan Ke</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                        <label class="form-label col-md-2">Upload Foto</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Jenis Penggunaan Bangunan</label>
                        <div class="col-md-6">
                            <select name="jenis_transaksi" id="jenis_transaksi" class="form-select">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Nama WP</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Alamat WP</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Blok/Kavling</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">RT</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                        <label class="form-label col-md-2">RW</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Kondisi Umum</label>
                        <div class="col-md-6">
                            <select name="jenis_transaksi" id="jenis_transaksi" class="form-select">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label col-md-2">Tahun Selesai Dibangun</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                        <label class="form-label col-md-2">Tahun Renovasi</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="nop" id="nop">
                        </div>
                    </div>
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel">
                    Komponen Utama
                </div>
                <div id="step-3" class="tab-pane" role="tabpanel">
                    Komponen Fasilitas
                </div>
                <div id="step-4" class="tab-pane" role="tabpanel">
                    Komponen Tambahan
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            // SmartWizard initialize
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                transition: {
                    animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                },
                // toolbarSettings: {
                //     toolbarPosition: 'bottom', // both bottom
                //     // toolbarExtraButtons: [btnFinish, btnCancel]
                // }
            });

        });
    </script>
@endpush
