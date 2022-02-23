<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_kecamatan',
        'kd_kelurahan',
        'nama_kelurahan'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kd_kecamatan');
    }

    // protected $with = ['kecamatan'];
}
