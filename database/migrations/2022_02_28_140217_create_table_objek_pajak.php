<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableObjekPajak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_objek', function (Blueprint $table) {
            $table->id();
            $table->char('kd_prov', 2);
            $table->char('kd_dati', 2);
            $table->char('kd_kecamatan', 3);
            $table->char('kd_kelurahan', 3);
            $table->char('kd_blok', 3);
            $table->char('no_urut', 4);
            $table->char('kd_jenis', 1);
            $table->string('nama_wp');
            $table->string('jalan_op');
            $table->string('no_jalan_op');
            $table->char('rt_op', 3)->default('000');
            $table->char('rw_op', 2)->default('00');
            $table->integer('jml_bng');
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
        Schema::dropIfExists('data_objek');
    }
}
