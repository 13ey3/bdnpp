<?php
namespace App\Http\Traits;
/**
 * convert trait
 */
trait NopTrait
{
    public function nopToArray($nop): array
    {
        $expNop = explode('.', $nop);
        $nopArr['kd_prov'] = $expNop[0];
        $nopArr['kd_dati'] = $expNop[1];
        $nopArr['kd_kecamatan'] = $expNop[2];
        $nopArr['kd_kelurahan'] = $expNop[3];
        $nopArr['kd_blok'] = $expNop[4];
        $nopArr['no_urut'] = $expNop[5];
        $nopArr['kd_jns'] = $expNop[6];
        return $nopArr;
    }

    public function nopToString($kd_prov, $kd_dati, $kd_kecamatan, $kd_kelurahan, $kd_blok, $no_urut, $kd_jns): String
    {
        return $kd_prov . '.' . $kd_dati . '.' . $kd_kecamatan . '.' . $kd_kelurahan . '.' . $kd_blok . '.' . $no_urut . '.' . $kd_jns;
    }
}
