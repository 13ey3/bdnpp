<?php

namespace Database\Seeders;

use App\Models\Setting\RefJpb;
use Illuminate\Database\Seeder;

class RefJpbTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $refJpb = [
            ['01', 'PERUMAHAN'],
            ['02', 'PERKANTORAN SWASTA'],
            ['03', 'PABRIK'],
            ['04', 'TOKO/APOTIK/PASAR/RUKO'],
            ['05', 'RUMAH SAKIT/KLINIK'],
            ['06', 'OLAH RAGA/REKREASI'],
            ['07', 'HOTEL/WISMA'],
            ['08', 'BENGKEL/GUDANG/PERTANIAN'],
            ['09', 'GEDUNG PEMERINTAH'],
            ['10', 'LAIN-LAIN'],
            ['11', 'BANGUNAN TIDAK KENA PAJAK'],
            ['12', 'BANGUNAN PARKIR'],
            ['13', 'APARTEMEN'],
            ['14', 'POMPA BENSIN'],
            ['15', 'TANGKI MINYAK'],
            ['16', 'GEDUNG SEKOLAH']
        ];

        foreach ($refJpb as $jpb) {
            RefJpb::create([
                'kd_jpb' => $jpb[0],
                'nama_jpb' => $jpb[1]
            ]);
        }
    }
}
