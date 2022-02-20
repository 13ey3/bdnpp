<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemdas', function (Blueprint $table) {
            $table->id();
            $table->char('kd_provinsi', 2);
            $table->string('nama_propinsi');
            $table->char('kd_dati', 2);
            $table->string('nama_dati');
            $table->string('nama_skpd');
            $table->string('singkatan_skpd');
            $table->string('alamat_skpd');
            $table->string('telp_skpd')->nullable();
            $table->string('kd_pos_skpd')->nullable();
            $table->string('email_skpd')->nullable();
            $table->string('website_skpd')->nullable();
            $table->string('logo_pemda')->nullable();
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
        Schema::dropIfExists('pemdas');
    }
}
