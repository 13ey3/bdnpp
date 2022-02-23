<?php

namespace App\Http\Controllers;

use App\Models\Setting\Kecamatan;
use App\Models\Setting\Kelurahan;
use App\Models\Setting\Pemda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class KelurahanController extends Controller
{
    public function index()
    {
        return view('kelurahan.index', [
            'pemda' => Pemda::first(),
            'kecamatans' => Kecamatan::get()
        ]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'kd_kecamatan' => 'required',
            'kd_kelurahan' => 'required|numeric|digits:3',
            'nama_kelurahan' => 'required',
        ]);

        $attr = [
            'kd_kecamatan' => $request->kd_kecamatan,
            'kd_kelurahan' => $request->kd_kelurahan,
            'nama_kelurahan' => Str::upper($request->nama_kelurahan),
        ];

        try {
            Kelurahan::create($attr);
        } catch (\Throwable $th) {
            Log::error('ERROR : ' . $th);
        }

        return response()->json(['success' => 'Data Berhasil di simpan.'], 200);
    }

    public function update(Request $request)
    {
        request()->validate([
            'kd_kecamatan' => 'required',
            'kd_kelurahan' => 'required|numeric|digits:3',
            'nama_kecamatan' => 'required',
        ]);

        $attr = [
            'kd_kecamatan' => $request->kd_kecamatan,
            'kd_kelurahan' => $request->kd_kelurahan,
            'nama_kelurahan' => Str::upper($request->nama_kelurahan),
        ];

        try {
            Kelurahan::where('id', $request->id)->update($attr);
        } catch (\Throwable $th) {
            Log::error('ERROR : ' . $th);
        }

        return response()->json(['success' => 'Data Berhasil di update.'], 200);
    }

    public function getKecamatanById(Request $request)
    {
        $data = Kelurahan::firstWhere('id', $request->id);

        return response()->json($data, 200);
    }

    public function destroy(Request $request)
    {
        try {
            Kelurahan::where('id', $request->id)
                ->delete();
            return response()->json(['status' => '1', 'msg' => 'Deleted successfully!']);
        } catch (\Throwable $th) {
            Log::error('ERROR :' . $th);
            return response()->json(['status' => '1', 'msg' => $th]);
        }
    }

    public function getDT()
    {
        $data = Kelurahan::join('kecamatans as kcm', 'kcm.kd_kecamatan', 'kelurahans.kd_kecamatan')
            ->select('kelurahans.id', 'kelurahans.kd_kelurahan', 'kcm.kd_kecamatan', 'kelurahans.nama_kelurahan', 'kcm.nama_kecamatan')
            ->orderBy('kelurahans.kd_kecamatan')->get();

        Log::info($data->toArray());

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = ' ';

                if (auth()->user()->can('kecamatan-edit')) {
                    $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-primary btn-sm" >Edit</a>  ';
                }

                if (auth()->user()->can('kecamatan-hapus')) {
                    $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a> ';
                }

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
