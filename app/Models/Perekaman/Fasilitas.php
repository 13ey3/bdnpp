<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $fillable = [
        'bangunan_id',
        'ac_split',
        'ac_split_pk',
        'ac_window',
        'ac_window_pk',
        'ac_floor',
        'ac_floor_pk',
        'ac_central',
        'lift_orang',
        'lift_barang',
        'eskalator_kecil',
        'eskalator_besar',
        'pagar1',
        'pagar1_panajang',
        'pagar1_tinggi',
        'pagar2',
        'pagar2_panajang',
        'pagar2_tinggi',
        'pagar3',
        'pagar3_panajang',
        'pagar3_tinggi',
        'genset',
        'daya_listrik',
        'air_panas',
        'pengolah_limbah',
        'sumur',
        'reservoir',
        'hydrant',
        'springkler',
        'alaram',
        'interkom',
        'penangkal_petir',
        'jml_pabx',
        'sound_system',
        'interkom_luas',
        'interkom_jml',
        'matv_luas',
        'matv_jml',
        'cctv_luas',
        'cctv_jml',
        'kolam_luas',
        'kolam_akhir',
        'tenis_lampu_beton',
        'tenis_tanpalampu_beton',
        'tenis_lampu_aspal',
        'tenis_tanpalampu_aspal',
        'tenis_lampu_tanah',
        'tenis_tanpalampu_tanah',
        'hal_ringan',
        'hal_sedang',
        'hal_keras'
    ];
}
