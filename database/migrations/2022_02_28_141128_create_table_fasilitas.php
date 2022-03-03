<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFasilitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('ac_split', 1)->default('0');
            $table->char('ac_split_pk',3)->default('0');
            $table->char('ac_window', 1)->default('0');
            $table->char('ac_window_pk',3)->default('0');
            $table->char('ac_floor', 1)->default('0');
            $table->char('ac_floor_pk',3)->default('0');
            $table->char('ac_central', 1)->default('0');
            $table->integer('lift_orang')->default(0)->nullable();
            $table->integer('lift_barang')->default(0)->nullable();
            $table->integer('eskalator_kecil')->default(0)->nullable();
            $table->integer('eskalator_besar')->default(0)->nullable();
            $table->char('pagar1', 3)->default(0)->nullable();
            $table->float('pagar1_panajang', 5, 2)->default(0)->nullable();
            $table->float('pagar1_tinggi', 5, 2)->default(0)->nullable();
            $table->char('pagar2', 3)->default(0)->nullable();
            $table->float('pagar2_panajang', 5, 2)->default(0)->nullable();
            $table->float('pagar2_tinggi', 5, 2)->default(0)->nullable();
            $table->char('pagar3', 3)->default(0)->nullable();
            $table->float('pagar3_panajang', 5, 2)->default(0)->nullable();
            $table->float('pagar3_tinggi', 5, 2)->default(0)->nullable();
            $table->float('genset', 8, 0)->default(0)->nullable();
            $table->float('daya_listrik', 8, 0)->default(0);
            $table->boolean('air_panas')->default(0)->nullable();
            $table->boolean('pengolah_limbah')->default(0)->nullable();
            $table->float('sumur', 5, 2)->default(0)->nullable();
            $table->boolean('reservoir')->default(0)->nullable();
            $table->boolean('hydrant')->default(0);
            $table->boolean('springkler')->default(0);
            $table->boolean('alaram')->default(0);
            $table->boolean('interkom')->default(0);
            $table->boolean('penangkal_petir')->default(0);
            $table->integer('jml_pabx')->default(0);
            $table->boolean('sound_system')->default(0);
            $table->integer('interkom_luas')->default(0);
            $table->integer('interkom_jml')->default(0);
            $table->integer('matv_luas')->default(0);
            $table->integer('matv_jml')->default(0);
            $table->integer('cctv_luas')->default(0);
            $table->integer('cctv_jml')->default(0);
            $table->float('kolam_luas', 4, 2)->default(0);
            $table->char('kolam_akhir', 1)->default('0');
            $table->integer('tenis_lampu_beton')->default(0);
            $table->integer('tenis_tanpalampu_beton')->default(0);
            $table->integer('tenis_lampu_aspal')->default(0);
            $table->integer('tenis_tanpalampu_aspal')->default(0);
            $table->integer('tenis_lampu_tanah')->default(0);
            $table->integer('tenis_tanpalampu_tanah')->default(0);
            $table->integer('hal_ringan')->default(0);
            $table->integer('hal_sedang')->default(0);
            $table->integer('hal_keras')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
}
