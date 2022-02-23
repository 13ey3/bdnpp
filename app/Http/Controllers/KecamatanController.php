<?php

namespace App\Http\Controllers;

use App\Models\Setting\Kecamatan;
use App\Models\Setting\Pemda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class KecamatanController extends Controller
{
    public function index()
    {
        return view('kecamatan.index', ['pemda' => Pemda::first()]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'kd_kecamatan' => 'required|numeric|digits:3',
            'nama_kecamatan' => 'required',
        ]);

        $attr = [
            'kd_kecamatan' => $request->kd_kecamatan,
            'nama_kecamatan' => Str::upper($request->nama_kecamatan),
        ];

        try {
            Kecamatan::create($attr);
        } catch (\Throwable $th) {
            Log::error('ERROR : ' . $th);
        }

        return response()->json(['success' => 'Data Berhasil di simpan.'], 200);
    }

    public function update(Request $request)
    {
        request()->validate([
            'kd_kecamatan' => 'required|numeric|digits:3',
            'nama_kecamatan' => 'required',
        ]);

        $attr = [
            'kd_kecamatan' => $request->kd_kecamatan,
            'nama_kecamatan' => Str::upper($request->nama_kecamatan),
        ];

        try {
            Kecamatan::where('id', $request->id)->update($attr);
        } catch (\Throwable $th) {
            Log::error('ERROR : ' . $th);
        }

        return response()->json(['success' => 'Data Berhasil di update.'], 200);
    }

    public function getKecamatanById(Request $request)
    {
        $data = Kecamatan::firstWhere('id', $request->id);

        return response()->json($data, 200);
    }

    public function destroy(Request $request) {
        try {
            Kecamatan::where('id', $request->id)
                ->delete();
            return response()->json(['status'=>'1', 'msg'=>'Deleted successfully!']);
        } catch (\Throwable $th) {
            Log::error('ERROR :'. $th);
            return response()->json(['status'=>'1', 'msg'=>$th]);
        }
    }

    public function getDT()
    {
        $data = Kecamatan::orderBy('kd_kecamatan')->get();
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
