<?php

namespace App\Http\Controllers;

use App\Models\Setting\RefJpb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jpb = RefJpb::leftJoin('bangunan_objek', 'bangunan_objek.kd_jpb', '=', 'ref_jpb.kd_jpb')
        ->select('ref_jpb.*', DB::raw('count(bangunan_objek.id) as jml_pendataan'))
        ->where('ref_jpb.kd_jpb', '!=', '01')
        ->groupBy('ref_jpb.kd_jpb', 'ref_jpb.id', 'ref_jpb.nama_jpb', 'ref_jpb.created_at', 'ref_jpb.updated_at')
        ->get();

        return view('home', ['jpb' => $jpb]);
    }
}
