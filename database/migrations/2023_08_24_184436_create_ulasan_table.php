<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasan', function (Blueprint $table) {
            $table->increments('ulasan_id');

            $table->unsignedInteger('pengguna_id');
            $table->unsignedInteger('lapangan_id');
            $table->text('ulasan');
            $table->integer('rating');

            $table->foreign('pengguna_id')->references('pengguna_id')->on('pengguna')->onDelete('cascade');
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
        Schema::dropIfExists('ulasan');
    }
}
