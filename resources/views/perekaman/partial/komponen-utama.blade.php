<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">Material Dinding Dalam :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white" style="width: 50%">Material</th>
                    <th class="text-center text-white">Peruntukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materi_dinding_dlm as $mdd)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $mdd['id'] }}" id="{{ $mdd['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $mdd['id'] }}">{{ $mdd['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check me-2">
                                    <input class="form-check-input" data-type="str"
                                        name="{{ $mdd['id'] . '_struktur' }}" id="{{ $mdd['id'] . '_struktur' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $mdd['id'] . '_struktur' }}">{{ __('Struktur') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" data-type="bsm"
                                        name="{{ $mdd['id'] . '_basement' }}" id="{{ $mdd['id'] . '_basement' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $mdd['id'] . '_basement' }}">{{ __('Basement') }}</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">Material Dinding Luar :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Material</th>
                    <th class="text-center text-white" style="width: 10%">Lantai</th>
                    <th class="text-center text-white">Peruntukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materi_dinding_luar as $mdl)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $mdl['id'] }}" id="{{ $mdl['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $mdl['id'] }}">{{ $mdl['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right"
                                name="{{ 'lantai_mdl_' . $mdl['id'] }}" id="{{ 'lantai_mdl_' . $mdl['id'] }}">
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check me-2">
                                    <input class="form-check-input" data-type="str"
                                        name="{{ $mdl['id'] . '_struktur' }}" id="{{ $mdl['id'] . '_struktur' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $mdl['id'] . '_struktur' }}">{{ __('Struktur') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" data-type="bsm"
                                        name="{{ $mdl['id'] . '_basement' }}" id="{{ $mdl['id'] . '_basement' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $mdl['id'] . '_basement' }}">{{ __('Basement') }}</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">Finishing Dinding Dalam :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Material</th>
                    <th class="text-center text-white" style="width: 10%">Lantai</th>
                    <th class="text-center text-white">Peruntukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelapis_dinding_dlm as $pdd)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $pdd['id'] }}" id="{{ $pdd['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $pdd['id'] }}">{{ $pdd['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right"
                                name="{{ 'lantai_pdd_' . $pdd['id'] }}" id="{{ 'lantai_pdd_' . $pdd['id'] }}">
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check me-2">
                                    <input class="form-check-input" data-type="str"
                                        name="{{ $pdd['id'] . '_struktur' }}" id="{{ $pdd['id'] . '_struktur' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $pdd['id'] . '_struktur' }}">{{ __('Struktur') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" data-type="bsm"
                                        name="{{ $pdd['id'] . '_basement' }}" id="{{ $pdd['id'] . '_basement' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $pdd['id'] . '_basement' }}">{{ __('Basement') }}</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">Finishing Dinding Luar :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Material</th>
                    <th class="text-center text-white" style="width: 10%">Lantai</th>
                    <th class="text-center text-white">Peruntukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelapis_dinding_luar as $pdl)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $pdl['id'] }}" id="{{ $pdl['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $pdl['id'] }}">{{ $pdl['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right"
                                name="{{ 'lantai_pdl_' . $pdl['id'] }}" id="{{ 'lantai_pdl_' . $pdl['id'] }}">
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check me-2">
                                    <input class="form-check-input" data-type="str"
                                        name="{{ $pdl['id'] . '_struktur' }}" id="{{ $pdl['id'] . '_struktur' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $pdl['id'] . '_struktur' }}">{{ __('Struktur') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" data-type="bsm"
                                        name="{{ $pdl['id'] . '_basement' }}" id="{{ $pdl['id'] . '_basement' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $pdl['id'] . '_basement' }}">{{ __('Basement') }}</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">Laangit-langit :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Material</th>
                    <th class="text-center text-white" style="width: 10%">Lantai</th>
                    <th class="text-center text-white">Peruntukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($langit_langit as $ll)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $ll['id'] }}" id="{{ $ll['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $ll['id'] }}">{{ $ll['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right"
                                name="{{ 'lantai_ll_' . $ll['id'] }}" id="{{ 'lantai_ll_' . $ll['id'] }}">
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check me-2">
                                    <input class="form-check-input" data-type="str"
                                        name="{{ $ll['id'] . '_struktur' }}" id="{{ $ll['id'] . '_struktur' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $ll['id'] . '_struktur' }}">{{ __('Struktur') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" data-type="bsm"
                                        name="{{ $ll['id'] . '_basement' }}" id="{{ $ll['id'] . '_basement' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $ll['id'] . '_basement' }}">{{ __('Basement') }}</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <label for="jenis_atap" class="form-label fs-6 fw-semibold col-md-1">Atap</label>
    <div class="col-md-2">
        <select name="jenis_atap" id="jenis_atap" class="form-select form-select-sm ">
            @foreach (config('konstant.ATAP') as $atap)
                <option value="{{ $atap['id'] }}">{{ $atap['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">Pelapis Lantai :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white">Material</th>
                    <th class="text-center text-white" style="width: 10%">Lantai</th>
                    <th class="text-center text-white">Peruntukan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($floors as $pl)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="{{ $pl['id'] }}" id="{{ $pl['id'] }}"
                                    type="checkbox" value="true">
                                <label class="form-check-label"
                                    for="{{ $pl['id'] }}">{{ $pl['nama_item_resource'] }}</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right"
                                name="{{ 'lantai_pl_' . $pl['id'] }}" id="{{ 'lantai_pl_' . $pl['id'] }}">
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check me-2">
                                    <input class="form-check-input" data-type="str"
                                        name="{{ $pl['id'] . '_struktur' }}" id="{{ $pl['id'] . '_struktur' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $pl['id'] . '_struktur' }}">{{ __('Struktur') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" data-type="bsm"
                                        name="{{ $pl['id'] . '_basement' }}" id="{{ $pl['id'] . '_basement' }}"
                                        type="checkbox" value="true">
                                    <label class="form-check-label"
                                        for="{{ $pl['id'] . '_basement' }}">{{ __('Basement') }}</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
