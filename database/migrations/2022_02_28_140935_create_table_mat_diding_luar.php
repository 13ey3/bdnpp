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
        Schema::create('material_diding_luar', function (Blueprint $table) {
            $table->id();
            $table->integer('bangunan_id');
            $table->char('batu', 1)->default(0);
            $table->char('batu_str', 1)->default(0);
            $table->char('batu_bsm', 1)->default(0);
            $table->char('kaca', 1)->default(0);
            $table->char('kaca_str', 1)->default(0);
            $table->char('kaca_bsm', 1)->default(0);
            $table->char('celcon', 1)->default(0);
            $table->char('celcon_str', 1)->default(0);
            $table->char('celcon_bsm', 1)->default(0);
            $table->char('beton', 1)->default(0);
            $table->char('beton_str', 1)->default(0);
            $table->char('beton_bsm', 1)->default(0);
            $table->char('seng', 1)->default(0);
            $table->char('seng_str', 1)->default(0);
            $table->char('seng_bsm', 1)->default(0);
            $table->char('kayu', 1)->default(0);
            $table->char('kayu_str', 1)->default(0);
            $table->char('kayu_bsm', 1)->default(0);
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
        Schema::dropIfExists('material_diding_luar');
    }
}
