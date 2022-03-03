<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangunanObjek extends Model
{
    use HasFactory;

    protected $table = 'bangunan_objek';
    protected $fillable = [
        'objek_id',
        'user_id',
        'no_bng',
        'nilia_bng',
        'kd_jpb',
        'kondisi',
        'thn_bangun',
        'thn_renov',
        'jml_lantai',
        'jml_basement',
        'luas_bng',
        'luas_bng_lain',
        'luas_basement',
        'jenis_struktur',
        'atap',
        'foto_bng'
    ];

    public function dataObjek()
    {
        return $this->belongsTo(DataObjek::class);
    }
}
