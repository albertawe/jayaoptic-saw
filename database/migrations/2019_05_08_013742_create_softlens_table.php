<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftlensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softlens', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama')->nullable();
            $table->string('masapakai')->nullable();
            $table->string('kadarair')->nullable();
            $table->string('ukuran')->nullable();
            $table->integer('harga')->nullable();
            $table->string('warna')->nullable();
            $table->string('jenis')->nullable();
            $table->string('kriharga')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('softlens');
    }
}
