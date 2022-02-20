<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class PemdaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kd_provinsi' => 'required|numeric',
            'nama_propinsi' => 'required',
            'kd_dati' => 'required|numeric',
            'nama_dati' => 'required',
            'nama_skpd' => 'required',
            'singkatan_skpd' => 'required',
            'alamat_skpd' => 'required',
            'logo_pemda' => 'mimes:jpg,jpeg,png|file|max:2048',
        ];
    }
}
