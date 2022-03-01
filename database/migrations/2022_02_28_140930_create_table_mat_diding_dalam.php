<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatDidingDalam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_diding_dalam', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('gyp_imp', 1)->default(0);
            $table->char('gyp_imp_str', 1)->default(0);
            $table->char('gyp_imp_bsm', 1)->default(0);
            $table->char('gyp_lkl', 1)->default(0);
            $table->char('gyp_lkl_str', 1)->default(0);
            $table->char('gyp_lkl_bsm', 1)->default(0);
            $table->char('plywood', 1)->default(0);
            $table->char('plywood_str', 1)->default(0);
            $table->char('plywood_bsm', 1)->default(0);
            $table->char('triplex', 1)->default(0);
            $table->char('triplex_str', 1)->default(0);
            $table->char('triplex_bsm', 1)->default(0);
            $table->char('batu', 1)->default(0);
            $table->char('batu_str', 1)->default(0);
            $table->char('batu_bsm', 1)->default(0);
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
        Schema::dropIfExists('material_diding_dalam');
    }
}
