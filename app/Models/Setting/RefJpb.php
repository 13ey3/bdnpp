<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJpb extends Model
{
    use HasFactory;

    protected $table = 'ref_jpb';
    protected $fillable = [
        'kd_jpb',
        'nama_jpb'
    ];
}
