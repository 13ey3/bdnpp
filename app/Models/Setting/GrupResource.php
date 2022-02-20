<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_group_resource',
        'nama_resorce'
    ];
}
