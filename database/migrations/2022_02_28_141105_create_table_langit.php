<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLangit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langit', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('gypsum', 1)->default(0);
            $table->char('gypsum_str', 1)->default(0);
            $table->char('gypsum_bsm', 1)->default(0);
            $table->integer('gypsum_lantai')->default(0);
            $table->char('akustik', 1)->default(0);
            $table->char('akustik_str', 1)->default(0);
            $table->char('akustik_bsm', 1)->default(0);
            $table->integer('akustik_lantai')->default(0);
            $table->char('asbes', 1)->default(0);
            $table->char('asbes_str', 1)->default(0);
            $table->char('asbes_bsm', 1)->default(0);
            $table->integer('asbes_lantai')->default(0);
            $table->char('triplek', 1)->default(0);
            $table->char('triplek_str', 1)->default(0);
            $table->char('triplek_bsm', 1)->default(0);
            $table->integer('triplek_lantai')->default(0);
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
        Schema::dropIfExists('langit');
    }
}
