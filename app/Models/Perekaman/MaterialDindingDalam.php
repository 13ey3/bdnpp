<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDindingDalam extends Model
{
    use HasFactory;

    protected $table = 'material_dinding_dalam';
    protected $fillable = [
        'bangunan_id',
        'gyp_imp',
        'gyp_imp_str',
        'gyp_imp_bsm',
        'gyp_lkl',
        'gyp_lkl_str',
        'gyp_lkl_bsm',
        'plywood',
        'plywood_str',
        'plywood_bsm',
        'triplex',
        'triplex_str',
        'triplex_bsm',
        'batu',
        'batu_str',
        'batu_bsm'
    ];
}
