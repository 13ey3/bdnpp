<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaItemResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_resources', function (Blueprint $table) {
            $table->id();
            $table->char('kd_propinsi', 2);
            $table->char('kd_dati', 2);
            $table->char('kd_jenis_pekerjaan', 2);
            $table->char('kd_group_resource', 2);
            $table->char('kd_spek', 2)->default('00');
            $table->char('kd_det_pek', 2)->default('00');
            $table->char('thn_harga_resource', 4);
            $table->float('harga_resource', 8, 2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('harga_resources');
    }
}
