<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObjek extends Model
{
    use HasFactory;

    protected $table = 'data_objek';
    protected $fillable = [
        'kd_prov',
        'kd_dati',
        'kd_kecamatan',
        'kd_kelurahan',
        'kd_blok',
        'no_urut',
        'kd_jenis',
        'nama_wp',
        'jalan_op',
        'no_jalan_op',
        'rt_op',
        'rw_op',
        'jml_bng'
    ];

    public function bangunanObjek()
    {
        return $this->hasMany(BangunanObjek::class, 'objek_id');
    }
}
