<div class="row">
    <div class="col-md-12 justify-content-center px-4">
        <table class="table table-bordered table-sm caption-top">
            <caption class="text-dark fw-semibold">AIR CONDITIONING (AC) :</caption>
            <thead class="bg-info">
                <tr>
                    <th class="text-center text-white" >Material</th>
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
                            <input type="text" class="form-control form-control-sm" name="{{ $ac['id'] . '_jml' }}" name="{{ $ac['id'] . '_jml' }}">
                        </td>
                        <td class="text-center">
                            <input type="text" class="form-control form-control-sm" name="{{ $ac['id'] . '_pk' }}" name="{{ $ac['id'] . '_pk' }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>