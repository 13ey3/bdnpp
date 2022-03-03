<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelapisDindingLuar extends Model
{
    use HasFactory;

    protected $table = 'pelapis_dinding_luar';
    protected $fillable = [
        'bangunan_id',
        'kaca_imp',
        'kaca_imp_lantai',
        'kaca_lkl',
        'kaca_lkl_lantai',
        'cat',
        'cat_lantai',
        'granit_imp',
        'granit_imp_lantai',
        'granit_lkl',
        'granit_lkl_lantai',
        'marmer_imp',
        'marmer_imp_lantai',
        'marmer_lkl',
        'marmer_lkl_lantai',
        'kramik_lkl',
        'kramik_lkl_lantai'
    ];
}
