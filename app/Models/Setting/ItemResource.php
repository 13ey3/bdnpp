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

    public static function getMaterialDindingDalam()
    {
        return self::where('kd_jenis_pekerjaan', '=', '3')
            ->where('kd_group_resource', '=', '01')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }

    public static function getMaterialDindingLuar()
    {
        return self::where('kd_jenis_pekerjaan', '=', '3')
            ->where('kd_group_resource', '=', '02')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }

    public static function getPelpisDindingDalam()
    {
        return self::where('kd_jenis_pekerjaan', '=', '3')
            ->where('kd_group_resource', '=', '03')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }

    public static function getPelpisDindingLuar()
    {
        return self::where('kd_jenis_pekerjaan', '=', '3')
            ->where('kd_group_resource', '=', '04')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }

    public static function getLangitLangit()
    {
        return self::where('kd_jenis_pekerjaan', '=', '3')
            ->where('kd_group_resource', '=', '05')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }

    public static function getPenutupLantai()
    {
        return self::where('kd_jenis_pekerjaan', '=', '3')
            ->where('kd_group_resource', '=', '07')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }

    public static function getPendingin()
    {
        return self::where('kd_jenis_pekerjaan', '=', '9')
            ->where('kd_group_resource', '=', '40')
            ->where('kd_spek', '<>', '00')
            ->where('kd_det_pek', '=', '00')
            ->get();
    }
}
