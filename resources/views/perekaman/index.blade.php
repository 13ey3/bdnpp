@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active">
            <span>Perekaman Data</span>
        </li>
    </ol>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Daftar Perekaman Data ') }}
            @can('client-create')
                <a class="btn btn-success float-end" href="{{ route('perekaman-data.create') }}"> Entri</a>
            @endcan
        </div>

        <div class="card-body">
            <div id="alert_message"></div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="lspop-table">
                    <thead>
                        <tr class="bg-info">
                            <th class="text-light text-center">No</th>
                            <th class="text-light text-left">Nama</th>
                            <th class="text-light text-center">NOP</th>
                            <th class="text-light text-center">JPB</th>
                            <th class="text-light text-center" style="width: 200px;">Action</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>
                                <input type="text" class="form-control form-control-sm" name="nama_wp_filter"
                                    id="nama_wp_filter">
                            </th>
                            <th></th>
                            <th>
                                <select name="jpb_filter" id="jpb_filter" class="form-select form-select-sm">
                                    <option value=""> -- Pilih --</option>
                                    @foreach ($jpbs as $jpb)
                                        <option value="{{ $jpb->jd_jpb }}">{{ $jpb->kd_jpb . ' || ' . $jpb->nama_jpb }}
                                        </option>
                                    @endforeach
                                </select>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" colspan="5"> Tidak ada data.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix pagination-footer"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('extend/datagrid/datagrid.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var datatables = datagrid({
            url: 'perekaman-data/getDT',
            table: "#lspop-table",
            columns: [{
                    class: ""
                },
                {
                    class: "text-center fw-semibold text-success"
                },
                {
                    class: "text-center"
                },
                {
                    class: "text-center"
                },
                {
                    class: "text-center"
                },
            ],
            orders: [{
                    sortable: false
                },
                {
                    sortable: true,
                    name: "t_jenispermohonan"
                },
                {
                    sortable: true,
                    name: ""
                },
                {
                    sortable: true,
                    name: ""
                },
                {
                    sortable: false,
                    name: ""
                }
            ],

        });

        $("#filter-nopermohonan, #filter-jenisperizinan, #filter-namapemohon").keyup(function() {
            search();
        });

        $("#filter-jenispermohonan, #filter-tglpermohonan, #filter-status").change(function() {
            search();
        });

        function search() {
            datatables.setFilters({
                jenispermohonan: $("#filter-jenispermohonan").val(),
                nopermohonan: $("#filter-nopermohonan").val(),
                tglpermohonan: $("#filter-tglpermohonan").val(),
                jenisperizinan: $("#filter-jenisperizinan").val(),
                namapemohon: $("#filter-namapemohon").val(),
                status: $("#filter-status").val(),
            });
            datatables.reload();
        }
        search();
    </script>
@endpush
