<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatDidingLuar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_dinding_luar', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('batu', 1)->default(0);
            $table->integer('batu_lantai')->default(0);
            $table->char('kaca', 1)->default(0);
            $table->integer('kaca_lantai')->default(0);
            $table->char('celcon', 1)->default(0);
            $table->integer('celcon_lantai')->default(0);
            $table->char('beton', 1)->default(0);
            $table->integer('beton_lantai')->default(0);
            $table->char('seng', 1)->default(0);
            $table->integer('seng_lantai')->default(0);
            $table->char('kayu', 1)->default(0);
            $table->integer('kayu_lantai')->default(0);
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
        Schema::dropIfExists('material_dinding_luar');
    }
}
