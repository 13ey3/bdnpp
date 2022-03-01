<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelapisLantai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapis_lantai', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('granit_imp', 1)->default(0);
            $table->char('granit_imp_str', 1)->default(0);
            $table->char('granit_imp_bsm', 1)->default(0);
            $table->integer('granit_imp_lantai')->default(0);
            $table->char('granit_lkl', 1)->default(0);
            $table->char('granit_lkl_str', 1)->default(0);
            $table->char('granit_lkl_bsm', 1)->default(0);
            $table->integer('granit_lkl_lantai')->default(0);
            $table->char('marmer_imp', 1)->default(0);
            $table->char('marmer_imp_str', 1)->default(0);
            $table->char('marmer_imp_bsm', 1)->default(0);
            $table->integer('marmer_imp_lantai')->default(0);
            $table->char('marmer_lkl', 1)->default(0);
            $table->char('marmer_lkl_str', 1)->default(0);
            $table->char('marmer_lkl_bsm', 1)->default(0);
            $table->integer('marmer_lkl_lantai')->default(0);
            $table->char('kramik', 1)->default(0);
            $table->char('kramik_str', 1)->default(0);
            $table->char('kramik_bsm', 1)->default(0);
            $table->integer('kramik_lantai')->default(0);
            $table->char('vynil', 1)->default(0);
            $table->char('vynil_str', 1)->default(0);
            $table->char('vynil_bsm', 1)->default(0);
            $table->integer('vynil_lantai')->default(0);
            $table->char('karpet_imp', 1)->default(0);
            $table->char('karpet_imp_str', 1)->default(0);
            $table->char('karpet_imp_bsm', 1)->default(0);
            $table->integer('karpet_imp_lantai')->default(0);
            $table->char('karpet_lkl', 1)->default(0);
            $table->char('karpet_lkl_str', 1)->default(0);
            $table->char('karpet_lkl_bsm', 1)->default(0);
            $table->integer('karpet_lkl_lantai')->default(0);
            $table->char('kayu', 1)->default(0);
            $table->char('kayu_str', 1)->default(0);
            $table->char('kayu_bsm', 1)->default(0);
            $table->integer('kayu_lantai')->default(0);
            $table->char('ubinpc', 1)->default(0);
            $table->char('ubinpc_str', 1)->default(0);
            $table->char('ubinpc_bsm', 1)->default(0);
            $table->integer('ubinpc_lantai')->default(0);
            $table->char('semen', 1)->default(0);
            $table->char('semen_str', 1)->default(0);
            $table->char('semen_bsm', 1)->default(0);
            $table->integer('semen_lantai')->default(0);
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
        Schema::dropIfExists('pelapis_lantai');
    }
}
