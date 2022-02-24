@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Pemerintah Daerah</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Pemerintah Daearah ') }}
        </div>

        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="fw-semibold">{{ $message }}</div>
                    <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <form action="{{ url('pemerintah-daerah/create_update') }}" id="formPemda" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ $pemda->id ?? '' }}">
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Kode Provinsi</label>
                    <div class="col-md-1">
                        <input
                            class="form-control form-control-sm col-6 {{ $errors->has('kd_provinsi') ? 'is-invalid' : '' }}"
                            id="kd_provinsi" name="kd_provinsi" type="text" data-format="**" data-mask="xx"
                            value="{{ old('kd_provinsi') ?? ($pemda->kd_provinsi ?? '') }}">
                        @if ($errors->has('kd_provinsi'))
                            <div class="invalid-feedback">Tidak boleh Kosong</div>
                        @endif
                    </div>
                    <label class="form-label col-md-2" for="namaPropinsi">Nama Provinsi</label>
                    <div class="col-md-3">
                        <input
                            class="form-control form-control-sm {{ $errors->has('nama_propinsi') ? 'is-invalid' : '' }}"
                            id="nama_propinsi" name="nama_propinsi" type="text"
                            value="{{ old('nama_propinsi') ?? ($pemda->nama_propinsi ?? '') }}">
                        @if ($errors->has('nama_propinsi'))
                            <div class="invalid-feedback">Tidak boleh Kosong</div>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Kode Kab/Kota</label>
                    <div class="col-md-1">
                        <input
                            class="form-control form-control-sm col-6 {{ $errors->has('kd_dati') ? 'is-invalid' : '' }}"
                            id="kd_dati" name="kd_dati" type="text" data-format="**" data-mask="xx"
                            value="{{ old('kd_dati') ?? ($pemda->kd_dati ?? '') }}">
                        @if ($errors->has('kd_dati'))
                            <div class="invalid-feedback">Tidak boleh Kosong</div>
                        @endif
                    </div>
                    <label class="form-label col-md-2" for="namaPropinsi">Nama Kab/Kota</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-sm {{ $errors->has('nama_dati') ? 'is-invalid' : '' }}"
                            id="nama_dati" name="nama_dati" type="text"
                            value="{{ old('nama_dati') ?? ($pemda->nama_dati ?? '') }}">
                        @if ($errors->has('nama_dati'))
                            <div class="invalid-feedback">Tidak boleh Kosong</div>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Nama SKPD</label>
                    <div class="col-md-6">
                        <input class="form-control form-control-sm {{ $errors->has('nama_skpd') ? 'is-invalid' : '' }}"
                            id="nama_skpd" name="nama_skpd" type="text"
                            value="{{ old('nama_skpd') ?? ($pemda->nama_skpd ?? '') }}">
                        @if ($errors->has('nama_skpd'))
                            <div class="invalid-feedback">Tidak boleh Kosong</div>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Singkatan SKPD</label>
                    <div class="col-md-2">
                        <input
                            class="form-control form-control-sm {{ $errors->has('singkatan_skpd') ? 'is-invalid' : '' }}"
                            id="singkatan_skpd" name="singkatan_skpd" type="text"
                            value="{{ old('singkatan_skpd') ?? ($pemda->singkatan_skpd ?? '') }}">
                    </div>
                    @if ($errors->has('singkatan_skpd'))
                        <div class="invalid-feedback">Tidak boleh Kosong</div>
                    @endif
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Alamat SKPD</label>
                    <div class="col-md-6">
                        <textarea name="alamat_skpd" id="alamat_skpd"
                            class="form-control form-control-sm {{ $errors->has('alamat_skpd') ? 'is-invalid' : '' }}">{{ old('alamat_skpd') ?? ($pemda->alamat_skpd ?? '') }}</textarea>
                        @if ($errors->has('alamat_skpd'))
                            <div class="invalid-feedback">Tidak boleh Kosong</div>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Telp</label>
                    <div class="col-md-2">
                        <input class="form-control form-control-sm" id="telp_skpd" name="telp_skpd" type="text"
                            data-format="(****) ********" data-mask="xxxx xxxxxxxx"
                            value="{{ old('telp_skpd') ?? ($pemda->telp_skpd ?? '') }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Kode POS</label>
                    <div class="col-md-1">
                        <input class="form-control form-control-sm" id="kd_pos_skpd" name="kd_pos_skpd" type="text"
                            data-format="*****" data-mask="xxxxx"
                            value="{{ old('kd_pos_skpd') ?? ($pemda->kd_pos_skpd ?? '') }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Email</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-sm" id="email_skpd" name="email_skpd" type="text"
                            value="{{ old('email_skpd') ?? ($pemda->email_skpd ?? '') }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Website</label>
                    <div class="col-md-6">
                        <input class="form-control form-control-sm" id="website_skpd" name="website_skpd" type="text"
                            value="{{ old('website_skpd') ?? ($pemda->website_skpd ?? '') }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-md-2" for="kdPropinsi">Logo</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-sm {{ $errors->has('alamat_skpd') ? 'is-invalid' : '' }}"
                            id="logo_pemda" name="logo_pemda" type="file">
                        @if ($errors->has('alamat_skpd'))
                            <div class="invalid-feedback">Hanya bisa menggunakan JPEG, JPG, PNG</div>
                        @endif
                    </div>
                </div>
                
                <div class="row mb-2">
                    <div class="text-center">
                        <img class="img-thumbnail" id="logoImg"
                            src="{{ is_null($pemda->logo_pemda) ? asset('/images/logo-default.png') : asset('uploads/' . $pemda->logo_pemda) }}"
                            alt="" style="width: 200px;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 justify-content-end" style="display: flex">
                        <button class="btn btn-primary px-4 mr-3" id="btnSimpan"
                            type="submit">{{ __('Simpan') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script style="text/javascript">
        const getDatas = (id, urlTarget) => {
            return fetch(`${urlTarget}/${id}.json`)
                .then(res => res.json())
                .then(data => data)
                .catch(err => console.log(err))
        }

        $('#kd_provinsi').on('change', async () => {
            let a = await getDatas($("#kd_provinsi").val(), '{{ url('wilayah-indonesia/province') }}')
            if (a !== undefined) {
                $('#nama_propinsi').val(a.name)
            } else {
                $('#nama_propinsi').val('')
                alert('Data tidak ditemukan! isi manual')
            }
        })

        $('#kd_dati').on('change', async () => {
            let kdDati = $("#kd_provinsi").val() + $("#kd_dati").val()
            let a = await getDatas(kdDati, '{{ url('wilayah-indonesia/regency') }}')
            if (a !== undefined) {
                $('#nama_dati').val(a.name)
            } else {
                $('#nama_dati').val('')
                alert('Data tidak ditemukan! isi manual')
            }
        })
    </script>
@endpush
