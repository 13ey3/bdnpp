<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_jenis_pekerjaan',
        'kd_group_resource',
        'kd_spek',
        'kd_det_pek',
        'nama_item_resource',
        'satuan_resource',
    ];
}
