<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_resources', function (Blueprint $table) {
            $table->id();
            $table->char('kd_jenis_pekerjaan', 2);
            $table->char('kd_group_resource', 2);
            $table->char('kd_spek', 2)->default('00');
            $table->char('kd_det_pek', 2)->default('00');
            $table->string('nama_item_resource');
            $table->string('satuan_resource')->nullable();
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
        Schema::dropIfExists('item_resources');
    }
}
