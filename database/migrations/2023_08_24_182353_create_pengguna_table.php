<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('pengguna_id');

            $table->string('nama', 200);
            $table->string('email', 200)->unique();
            $table->string('password');
            $table->string('telepon', 200)->nullable();
            $table->string('alamat', 200)->nullable();
            $table->text('foto')->nullable();
            $table->enum('level', ['Admin', 'Pelanggan']);

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
        Schema::dropIfExists('pengguna');
    }
}
