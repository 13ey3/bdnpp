<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">AIR CONDITIONING (AC) :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Jenis</th>
                    <th class="text-center text-white" style="width: 10%">Unit</th>
                    <th class="text-center text-white" style="width: 10%">PK</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label"
                                    for="ac_split">{{ __('AC Split') }}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="ac_split_jml"
                                id="ac_split_jml">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="ac_split_pk"
                                id="ac_split_pk">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label"
                                    for="ac_window">{{ __('AC Window') }}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="ac_window_jml"
                                id="ac_window_jml">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="ac_window_pk"
                                id="ac_window_pk">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label"
                                    for="ac_floor">{{ __('AC Floor') }}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="ac_floor_jml"
                                id="ac_floor_jml">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="ac_floor_pk"
                                id="ac_floor_pk">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="form-check">
                                <input class="form-check-input" name="ac_central" id="ac_central"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="ac_split">{{ __('AC Central') }}</label>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 fw-semibold col-md-2">Lift</label>
    <label class="form-label fs-6 col-md-2">Penumpang</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" data-type="stair" name="lift_penumpang" id="lift_penumpang">
    </div>
    <label class="form-label fs-6 col-md-2">Barang</label>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" data-type="stair" name="lift_barang" id="lift_barang">
    </div>
</div>

<div class="row">
    <label class="form-label fs-6 fw-semibold col-md-2">Eskalator</label>
    <label class="form-label fs-6 col-md-2">Lebar < 0,8 m</label>
            <div class="col-md-1">
                <input type="text" class="form-control form-control-sm" data-type="stair" name="eskalator_kecil" id="eskalator_kecil">
            </div>
            <label class="form-label fs-6 col-md-2">Lebar > 0,8 m</label>
            <div class="col-md-1">
                <input type="text" class="form-control form-control-sm" data-type="stair" name="eskalator_besar" id="eskalator_besar">
            </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm">
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Pagar</th>
                    <th class="text-center text-white" style="width: 10%">Panjang (m)</th>
                    <th class="text-center text-white" style="width: 10%">Tinggi (m)</th>
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
                        <input type="text" name="pjg_pagar_1" id="pjg_pagar_1" class="form-control form-control-sm text-right">
                    </td>
                    <td>
                        <input type="text" name="tinggi_pagar_1" id="tinggi_pagar_1"
                            class="form-control form-control-sm text-right">
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
                        <input type="text" name="pjg_pagar_2" id="pjg_pagar_2" class="form-control form-control-sm text-right">
                    </td>
                    <td>
                        <input type="text" name="tinggi_pagar_2" id="tinggi_pagar_2"
                            class="form-control form-control-sm text-right">
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
                        <input type="text" name="pjg_pagar_3" id="pjg_pagar_3" class="form-control form-control-sm text-right">
                    </td>
                    <td>
                        <input type="text" name="tinggi_pagar_3" id="tinggi_pagar_3"
                            class="form-control form-control-sm text-right">
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
        <input type="text" class="form-control form-control-sm text-left" name="daya_listrik" id="daya_listrik">
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
        <select name="pengolah_limbah" id="pengolah_limbah" class="form-select form-select-sm">
            <option value="false">Tidak Ada</option>
            <option value="true">Ada</option>
        </select>
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">Sumur Artesis m<sup>2</sup></label>
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
        <input class="form-check-input" name="hydrant" id="hydrant" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="hydrant">Hydrant</label>
        <input class="form-check-input" name="sprinkler" id="sprinkler" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="sprinkler">Sprinkler</label>
        <input class="form-check-input" name="alaram" id="alaram" type="checkbox" value="true">
        <label class="form-check-label pe-2" for="alaram">Alaram</label>
        <input class="form-check-input" name="interkom" id="interkom" type="checkbox" value="true">
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
        <input class="form-check-input" name="luas_intrkom" id="luas_intrkom" type="radio" value="luas">
        <label class="form-check-label pe-2" for="luas_intrkom">Luas m<sup>2</sup></label>
        <input class="form-check-input" name="lantai_interkom" id="lantai_interkom" type="radio" value="lantai">
        <label class="form-check-label pe-2" for="lantai_interkom">Jml. Lantai</label>
    </div>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jmlh_luas_interkom" id="jmlh_luas_interkom">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">MATV</label>
    <div class="col-md-3">
        <input class="form-check-input" name="luas_matv" id="luas_matv" type="radio" value="luas">
        <label class="form-check-label pe-2" for="luas_matv">Luas m<sup>2</sup></label>
        <input class="form-check-input" name="lantai_matv" id="lantai_matv" type="radio" value="lantai">
        <label class="form-check-label pe-2" for="lantai_matv">Jml. Lantai</label>
    </div>
    <div class="col-md-1">
        <input type="text" class="form-control form-control-sm" name="jmlh_luas_matv" id="jmlh_luas_matv">
    </div>
</div>

<div class="row">
    <label class="form-label col-md-3">CCTV</label>
    <div class="col-md-3">
        <input class="form-check-input" name="luas_cctv" id="luas_cctv" type="radio" value="luas">
        <label class="form-check-label pe-2" for="luas_cctv">Luas m<sup>2</sup></label>
        <input class="form-check-input" name="lantai_cctv" id="lantai_cctv" type="radio" value="lantai">
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
        <select name="kolam_akhir" id="kolam_akhir" class="form-select form-select-sm">
            <option value="1">Diplester</option>
            <option value="2">Diplester</option>
        </select>
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
                    <td class="fs-6">
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
                    <td class="fs-6">
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
                    <td class="fs-6">
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