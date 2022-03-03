<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelapisDindingLuar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapis_dinding_luar', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('kaca_imp', 1)->default(0);
            $table->integer('kaca_imp_lantai')->default(0);
            $table->char('kaca_lkl', 1)->default(0);
            $table->integer('kaca_lkl_lantai')->default(0);
            $table->char('cat', 1)->default(0);
            $table->integer('cat_lantai')->default(0);
            $table->char('granit_imp', 1)->default(0);
            $table->integer('granit_imp_lantai')->default(0);
            $table->char('granit_lkl', 1)->default(0);
            $table->integer('granit_lkl_lantai')->default(0);
            $table->char('marmer_imp', 1)->default(0);
            $table->integer('marmer_imp_lantai')->default(0);
            $table->char('marmer_lkl', 1)->default(0);
            $table->integer('marmer_lkl_lantai')->default(0);
            $table->char('kramik_lkl', 1)->default(0);
            $table->integer('kramik_lkl_lantai')->default(0);
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
        Schema::dropIfExists('pelapis_dinding_luar');
    }
}
