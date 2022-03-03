<?php

namespace App\Models\Perekaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langit extends Model
{
    use HasFactory;

    protected $table = 'langit';
    protected $fillable = [
        'bangunan_id',
        'gypsum',
        'gypsum_str',
        'gypsum_bsm',
        'gypsum_lantai',
        'akustik',
        'akustik_str',
        'akustik_bsm',
        'akustik_lantai',
        'asbes',
        'asbes_str',
        'asbes_bsm',
        'asbes_lantai',
        'triplek',
        'triplek_str',
        'triplek_bsm',
        'triplek_lantai'
    ];
}
