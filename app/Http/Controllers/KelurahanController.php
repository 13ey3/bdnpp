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
            'kecamatan' => Kecamatan::get()
        ]);
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
            Kelurahan::create($attr);
        } catch (\Throwable $th) {
            Log::error('ERROR : ' . $th);
            dd($th);
        }

        return response()->json(['success' => 'Data Berhasil di simpan.'], 200);
    }

    public function getDT()
    {
        $data = Kecamatan::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = ' <a class="btn btn-info btn-sm" href="' . route('clients.show', $row->id) . '">Show</a> ';

                if (auth()->user()->can('kecamatan-edit')) {
                    $btn .= '<a class="btn btn-primary btn-sm" href="' . route('clients.edit', $row->id) . '">Edit</a>  ';
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
