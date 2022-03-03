<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelapisDindingDalam extends Model
{
    use HasFactory;

    protected $table = 'pelapis_dinding_dalam';
    protected $fillable = [
        'bangunan_id',
        'plester',
        'plester_str',
        'plester_bsm',
        'plester_lantai',
        'kaca_imp',
        'kaca_imp_str',
        'kaca_imp_bsm',
        'kaca_imp_lantai',
        'kaca_lkl',
        'kaca_lkl_str',
        'kaca_lkl_bsm',
        'kaca_lkl_lantai',
        'wallpap',
        'wallpap_str',
        'wallpap_bsm',
        'wallpap_lantai',
        'cat',
        'cat_str',
        'cat_bsm',
        'cat_lantai',
        'granit_imp',
        'granit_imp_str',
        'granit_imp_bsm',
        'granit_imp_lantai',
        'granit_lkl',
        'granit_lkl_str',
        'granit_lkl_bsm',
        'granit_lkl_lantai',
        'marmer_imp',
        'marmer_imp_str',
        'marmer_imp_bsm',
        'marmer_imp_lantai',
        'marmer_lkl',
        'marmer_lkl_str',
        'marmer_lkl_bsm',
        'marmer_lkl_lantai',
        'keramik',
        'keramik_str',
        'keramik_bsm',
        'keramik_lantai'
    ];
}
