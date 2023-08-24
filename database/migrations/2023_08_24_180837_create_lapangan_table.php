<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapangan', function (Blueprint $table) {
            $table->increments('lapangan_id');

            $table->string('lapangan_nama', 200)->unique();
            $table->string('lapangan_jenis', 200);
            $table->text('deskripsi');
            $table->text('foto');
            
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
        Schema::dropIfExists('lapangan');
    }
}
