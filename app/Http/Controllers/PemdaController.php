<?php

namespace App\Http\Controllers;

use App\Http\Requests\Setting\PemdaRequest;
use App\Models\Setting\Pemda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class PemdaController extends Controller
{
    public function index()
    {
        return view('pemda.index', ['pemda' => Pemda::first()]);
    }
    public function createOrUpdate(PemdaRequest $request)
    {
        $attr = $request->validated();
        $uploadPath = public_path('uploads');

        try {
            if ($request->hasFile('logo_pemda')) {
                if (!File::isDirectory($uploadPath)) {
                    File::makeDirectory($uploadPath, 0764, true, true);
                }
                $file = $request->file('logo_pemda');
                $extension = $file->getClientOriginalExtension();
                $rename = 'file_' . date('YmdHis') . '.' . $extension;

                if (!$file->move($uploadPath, $rename)) {
                    return redirect()->back()->with('message', 'Gagal Upload!');
                }
                $attr['logo_pemda'] = $rename;
            }

            $attr['telp_skpd'] = $request->telp_skpd;
            $attr['kd_pos_skpd'] = $request->kd_pos_skpd;
            $attr['email_skpd'] = $request->email_skpd;
            $attr['website_skpd'] = $request->website_skpd;

            if (isset($request->id)) {
                Pemda::where('id', $request->id)->update($attr);
            } else {
                Pemda::create($attr);
            }
        } catch (\Throwable $th) {
            Log::error('error => ' . $th);
            dd($th);
        }

        return redirect()->back()
            ->with('success', 'Data berhasil di simpan');
    }
}
