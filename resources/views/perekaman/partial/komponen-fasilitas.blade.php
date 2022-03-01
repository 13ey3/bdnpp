<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">AIR CONDITIONING (AC) :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Material</th>
                    <th class="text-center text-white" style="width: 10%">Unit</th>
                    <th class="text-center text-white" style="width: 10%">PK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingin as $ac)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $ac['id'] }}" id="{{ $ac['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $ac['id'] }}">{{ $ac['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="{{ $ac['id'] . '_jml' }}"
                                name="{{ $ac['id'] . '_jml' }}">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="{{ $ac['id'] . '_pk' }}"
                                name="{{ $ac['id'] . '_pk' }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 fw-semibold col-md-2">Lift</label>
    <label class="form-label fs-6 col-md-2">Penumpang</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="lift_penumpang" id="lift_penumpang">
    </div>
    <label class="form-label fs-6 col-md-2">Barang</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="lift_barang" id="lift_barang">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 fw-semibold col-md-2">Eskalator</label>
    <label class="form-label fs-6 col-md-2">Lebar < 0,8 m</label>
            <div class="col-md-1">
                <input type="text" class="form-control form-control-sm" name="lift_penumpang" id="lift_penumpang">
            </div>
            <label class="form-label fs-6 col-md-2">Lebar > 0,8 m</label>
            <div class="col-md-1">
                <input type="text" class="form-control form-control-sm" name="lift_penumpang" id="lift_penumpang">
            </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm">
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Pagar</th>
                    <th class="text-center text-white" style="width: 10%">Panjang</th>
                    <th class="text-center text-white" style="width: 10%">Tinggi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="pagar_1" id="pagar_1" class="form-select form-select-sm">
                            <option value="">Pilih</option>
                            @foreach (config('konstant.PAGAR') as $pagar)
                                <option value="{{ $pagar['id'] }}">{{ $pagar['name'] }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" name="pjg_pagar_1" id="pjg_pagar_1" class="form-control form-control-sm">
                    </td>
                    <td>
                        <input type="text" name="tinggi_pagar_1" id="tinggi_pagar_1"
                            class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="pagar_2" id="pagar_2" class="form-select form-select-sm">
                            <option value="">Pilih</option>
                            @foreach (config('konstant.PAGAR') as $pagar)
                                <option value="{{ $pagar['id'] }}">{{ $pagar['name'] }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" name="pjg_pagar_2" id="pjg_pagar_2" class="form-control form-control-sm">
                    </td>
                    <td>
                        <input type="text" name="tinggi_pagar_2" id="tinggi_pagar_2"
                            class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="pagar_3" id="pagar_3" class="form-select form-select-sm">
                            <option value="">Pilih</option>
                            @foreach (config('konstant.PAGAR') as $pagar)
                                <option value="{{ $pagar['id'] }}">{{ $pagar['name'] }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" name="pjg_pagar_3" id="pjg_pagar_3" class="form-control form-control-sm">
                    </td>
                    <td>
                        <input type="text" name="tinggi_pagar_3" id="tinggi_pagar_3"
                            class="form-control form-control-sm">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Genset</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="ukuran_genset" id="ukuran_genset">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Daya Listrik Terpasang</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="ukuran_genset" id="ukuran_genset">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Sis. Air Panas</label>
    <div class="col-md-2">
        <select name="air_panas" id="air_panas" class="form-select form-select-sm">
            <option value="false">Tidak Ada</option>
            <option value="true">Ada</option>
        </select>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Sis. Pengolahan Limbah</label>
    <div class="col-md-2">
        <select name="air_panas" id="air_panas" class="form-select form-select-sm">
            <option value="false">Tidak Ada</option>
            <option value="true">Ada</option>
        </select>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Sumur Artesis</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="sumur" id="sumur">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Reservoir</label>
    <div class="col-md-2">
        <select name="reservoir" id="reservoir" class="form-select form-select-sm">
            <option value="false">Tidak Ada</option>
            <option value="true">Ada</option>
        </select>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Proteksi Api</label>
    <div class="col-md-9">
        <input class="form-check-input" data-type="bsm" name="hydrant" id="hydrant" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="hydrant">Hydrant</label>
        <input class="form-check-input" data-type="bsm" name="sprinkler" id="sprinkler" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="sprinkler">Sprinkler</label>
        <input class="form-check-input" data-type="bsm" name="alaram" id="alaram" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="alaram">Alaram</label>
        <input class="form-check-input" data-type="bsm" name="interkom" id="interkom" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="interkom">Interkom</label>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Penangkal Petir</label>
    <div class="col-md-2">
        <select name="penangkal_petir" id="penangkal_petir" class="form-select form-select-sm">
            <option value="false">Tidak Ada</option>
            <option value="true">Ada</option>
        </select>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Jml. Saluran PABX</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="pabx" id="pabx">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Sis. Tata Suara</label>
    <div class="col-md-2">
        <select name="sound_system" id="sound_system" class="form-select form-select-sm">
            <option value="false">Tidak Ada</option>
            <option value="true">Ada</option>
        </select>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Video Interkom</label>
    <div class="col-md-3">
        <input class="form-check-input" name="luas_lantai_interkom" id="luas_intrkom" type="radio" value="luas">
        <label class="form-check-label pe-2" for="luas_intrkom">Luas m<sup>2</sup></label>
        <input class="form-check-input" name="luas_lantai_interkom" id="lantai_interkom" type="radio" value="lantai">
        <label class="form-check-label pe-2" for="lantai_interkom">Jml. Lantai</label>
    </div>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jmlh_luas_interkom" id="jmlh_luas_interkom">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">MATV</label>
    <div class="col-md-3">
        <input class="form-check-input" name="luas_lantai_matv" id="luas_matv" type="radio" value="luas">
        <label class="form-check-label pe-2" for="luas_matv">Luas m<sup>2</sup></label>
        <input class="form-check-input" name="luas_lantai_matv" id="lantai_matv" type="radio" value="lantai">
        <label class="form-check-label pe-2" for="lantai_matv">Jml. Lantai</label>
    </div>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jmlh_luas_matv" id="jmlh_luas_matv">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">CCTV</label>
    <div class="col-md-3">
        <input class="form-check-input" name="luas_lantai_cctv" id="luas_cctv" type="radio" value="luas">
        <label class="form-check-label pe-2" for="luas_cctv">Luas m<sup>2</sup></label>
        <input class="form-check-input" name="luas_lantai_cctv" id="lantai_cctv" type="radio" value="lantai">
        <label class="form-check-label pe-2" for="lantai_cctv">Jml. Lantai</label>
    </div>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jmlh_luas_cctv" id="jmlh_luas_cctv">
    </div>
</div>

<div class="row fas_kolam">
    <label class="form-label col-md-3">Kolam Renang</label>
    <label class="form-label col-md-1">Luas</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="luas_kolam" id="luas_kolam">
    </div>
    <label class="form-label col-md-1">Finishing</label>
    <div class="col-md-4">
        <input class="form-check-input" name="finsihing_kolam" id="luas_cctv" type="radio" value="plester">
        <label class="form-check-label pe-2" for="luas_cctv">Diplester</label>
        <input class="form-check-input" name="finsihing_kolam" id="lantai_cctv" type="radio" value="pelapis">
        <label class="form-check-label pe-2" for="lantai_cctv">Dengan Pelapis</label>
    </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm">
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Lapang Tenis</th>
                    <th class="text-center text-white" style="width: 20%">Dengan Lampu</th>
                    <th class="text-center text-white" style="width: 20%">Tanpa Lampu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Beton
                    </td>
                    <td>
                        <input type="text" name="beton_tenis_lampu" id="beton_tenis_lampu" class="form-control form-control-sm">
                    </td>
                    <td>
                        <input type="text" name="beton_tenis_tanpalampu" id="beton_tenis_tanpalampu" class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <td>
                        Aspal
                    </td>
                    <td>
                        <input type="text" name="aspal_tenis_lampu" id="aspal_tenis_lampu" class="form-control form-control-sm">
                    </td>
                    <td>
                        <input type="text" name="aspal_tenis_tanpalampu" id="aspal_tenis_tanpalampu" class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanah Liat
                    </td>
                    <td>
                        <input type="text" name="liat_tenis_lampu" id="liat_tenis_lampu" class="form-control form-control-sm">
                    </td>
                    <td>
                        <input type="text" name="liat_tenis_tanpalampu" id="liat_tenis_tanpalampu" class="form-control form-control-sm">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Luas Perkerasan Ringan</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="perkerasang_ringan" id="perkerasang_ringan">
    </div>
</div>
<div class="row">
    <label class="form-label col-md-3">Luas Perkerasan Sedang</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="perkerasan_sedang" id="perkerasan_sedang">
    </div>
</div>
<div class="row">
    <label class="form-label col-md-3">Luas Perkerasan Keras</label>
    <div class="col-md-2">
        <input type="text" class="form-control form-control-sm text-left" name="perkerasan_keras" id="perkerasan_keras">
    </div>
</div>