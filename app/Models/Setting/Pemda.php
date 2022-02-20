<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemda extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_provinsi',
        'nama_propinsi',
        'kd_dati',
        'nama_dati',
        'nama_skpd',
        'singkatan_skpd',
        'alamat_skpd',
        'telp_skpd',
        'kd_pos_skpd',
        'email_skpd',
        'website_skpd',
        'logo_pemda',
    ];
}
