<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBngObjek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangunan_objek', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('objek_id');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');
            $table->integer('no_bng');
            $table->float('nilia_bng', 12)->nullable();
            $table->char('kd_jpb', 2);
            $table->char('kondisi', 1);
            $table->char('thn_bangun', 4);
            $table->char('thn_renov', 4)->default('0');
            $table->integer('jml_lantai');
            $table->integer('jml_basement')->default(0);
            $table->integer('luas_bng');
            $table->integer('luas_bng_lain')->default(0);
            $table->integer('luas_basement')->default(0);
            $table->char('jenis_struktur', 1);
            $table->char('atap', 1);
            $table->string('foto_bng')->nullable();
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
        Schema::dropIfExists('bangunan_objek');
    }
}
