<div class="row">
    <label class="form-label fs-6 col-md-2">Jenis Transaksi</label>
    <div class="col-md-3">
        <select name="jenis_transaksi" id="jenis_transaksi" class="form-select form-select-sm">
            @foreach (config('konstant.TRANSAKSI') as $trx)
                <option value="{{ $trx['id'] }}">{{ $trx['name'] }}</option>
            @endforeach
        </select>
    </div>
    <label class="form-label fs-6 col-md-1">NOP</label>
    <div class="col-md-3">
        <input type="text" class="form-control form-control-sm" name="nop" id="nop">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-2">Jumlah Bang.</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jml_bng" id="jml_bng">
    </div>
    <label class="form-label fs-6 col-md-2">Bangunan Ke</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="no_bng" id="no_bng">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-3">Jenis Penggunaan Bangunan</label>
    <div class="col-md-3">
        <select name="kd_jpb" id="kd_jpb" class="form-select form-select-sm">
            @foreach ($jpbs as $jpb)
                <option value="{{ $jpb->id }}">{{ $jpb->kd_jpb .' || '. $jpb->nama_jpb }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <label class="form-label fs-6 col-md-2">Nama WP</label>
    <div class="col-md-3">
        <input type="text" class="form-control form-control-sm" name="nama_wp" id="nama_wp">
    </div>
</div>
<div class="row">
    <label class="form-label fs-6 col-md-2">Alamat WP</label>
    <div class="col-md-6">
        <input type="text" class="form-control form-control-sm" name="jalan_op" id="jalan_op">
    </div>
</div>
<div class="row">
    <label class="form-label fs-6 col-md-2">Blok/Kavling</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="no_jalan_op" id="no_jalan_op">
    </div>
    <label class="form-label fs-6 col-md-1">RT</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="rt_op" id="rt_op">
    </div>
    <label class="form-label fs-6 col-md-1">RW</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="rw_op" id="rw_op">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-2">Kondisi Umum</label>
    <div class="col-md-3">
        <select name="kondisi" id="kondisi" class="form-select form-select-sm">
            @foreach (config('konstant.KONDISI') as $kondisi)
                <option value="{{ $kondisi['id'] }}">{{ $kondisi['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <label class="form-label fs-6 col-md-3">Tahun Selesai Dibangun</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="thn_bangun" id="thn_bangun">
    </div>
    <label class="form-label fs-6 col-md-3">Tahun Renovasi</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="thn_renov" id="thn_renov">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-3">Jml Lanatai Bangunan</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jml_lantai" id="jml_lantai">
    </div>
    <label class="form-label fs-6 col-md-3">Jml Lanatai Basement</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="nop" id="nop">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-3">Luas Bang(selain basement)</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="luas_bng" id="luas_bng">
    </div>
    <label class="form-label fs-6 col-md-3">Luas Ruanagn Lain</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="luas_bng_lain" id="luas_bng_lain">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-3">Luas Lanatai Basement</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="luas_basement" id="luas_basement">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 col-md-2">Konstruksi Bang</label>
    <div class="col-md-2">
        <select name="jenis_struktur" id="jenis_struktur" class="form-select form-select-sm">
            @foreach (config('konstant.STRUKTUR') as $konstruksi)
                <option value="{{ $konstruksi['id'] }}">{{ $konstruksi['name'] }}</option>
            @endforeach

        </select>
    </div>
    <label class="form-label fs-6 col-md-2">Upload Foto</label>
    <div class="col-md-3">
        <input type="file" class="form-control form-control-sm" name="foto_bng" id="foto_bng">
    </div>
</div>
