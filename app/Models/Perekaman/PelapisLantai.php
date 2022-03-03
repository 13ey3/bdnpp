<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelapisLantai extends Model
{
    use HasFactory;

    protected $table = 'pelapis_lantai';
    protected $fillable = [
        'bangunan_id',
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
        'kramik',
        'kramik_str',
        'kramik_bsm',
        'kramik_lantai',
        'vynil',
        'vynil_str',
        'vynil_bsm',
        'vynil_lantai',
        'karpet_imp',
        'karpet_imp_str',
        'karpet_imp_bsm',
        'karpet_imp_lantai',
        'karpet_lkl',
        'karpet_lkl_str',
        'karpet_lkl_bsm',
        'karpet_lkl_lantai',
        'kayu',
        'kayu_str',
        'kayu_bsm',
        'kayu_lantai',
        'ubinpc',
        'ubinpc_str',
        'ubinpc_bsm',
        'ubinpc_lantai',
        'semen',
        'semen_str',
        'semen_bsm',
        'semen_lantai'
    ];
}
