<?php

namespace App\Http\Controllers;

use App\Models\Setting\ItemResource;
use App\Models\Setting\RefJpb;
use Illuminate\Http\Request;

class PerekamanDataController extends Controller
{
    public function index()
    {
        return view('perekaman.index');
    }

    public function create()
    {
        $data = [
            'jpbs' => RefJpb::where('kd_jpb', '!=', '01')->orderBy('kd_jpb')->get(),
            'materi_dinding_dlm' => ItemResource::getMaterialDindingDalam(),
            'materi_dinding_luar' => ItemResource::getMaterialDindingLuar(),
            'pelapis_dinding_dlm' => ItemResource::getPelpisDindingDalam(),
            'pelapis_dinding_luar' => ItemResource::getPelpisDindingLuar(),
            'langit_langit' => ItemResource::getLangitLangit(),
            'floors' => ItemResource::getPenutupLantai(),
            'pendingin' => ItemResource::getPendingin(),
        ];

        return view('perekaman.create', $data);
    }

    public function store(Request $request)
    {
        echo "data berhasil disimpan";
        return redirect('perekaamn-data');
    }
}
