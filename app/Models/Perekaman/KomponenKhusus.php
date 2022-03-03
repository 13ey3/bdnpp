<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomponenKhusus extends Model
{
    use HasFactory;

    protected $table = 'komponen_khusus';
    protected $fillable = [
        'bangunan_id',
        'tinggi_kolom',
        'lebar_bentang',
        'luas_mezanin',
        'daya_lantai',
        'jml_kanopi',
        'posisi_tank',
        'kapasitas_tank'
    ];
}
