<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('jadwal_id');

            $table->unsignedInteger('lapangan_id');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->bigInteger('harga');

            $table->foreign('lapangan_id')->references('lapangan_id')->on('lapangan')->onDelete('cascade');

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
        Schema::dropIfExists('jadwal');
    }
}
