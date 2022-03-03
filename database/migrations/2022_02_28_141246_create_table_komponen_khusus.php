<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKomponenKhusus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen_khusus', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->integer('tinggi_kolom')->default(0);
            $table->integer('lebar_bentang')->default(0);
            $table->integer('luas_mezanin')->default(0);
            $table->integer('daya_lantai')->default(0);
            $table->integer('jml_kanopi')->default(0);
            $table->char('posisi_tank', 1)->default(0);
            $table->integer('kapasitas_tank')->default(0);
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
        Schema::dropIfExists('komponen_khusus');
    }
}
