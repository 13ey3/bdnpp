<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDindingLuar extends Model
{
    use HasFactory;

    protected $table = 'material_dinding_luar';
    protected $fillable = [
        'bangunan_id',
        'batu',
        'batu_lantai',
        'kaca',
        'kaca_lantai',
        'celcon',
        'celcon_lantai',
        'beton',
        'beton_lantai',
        'seng',
        'seng_lantai',
        'kayu',
        'kayu_lantai'
    ];
}
