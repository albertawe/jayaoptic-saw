<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKacamataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kacamatas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama')->nullable();
            $table->string('warna')->nullable();
            $table->string('ketebalan')->nullable();
            $table->integer('harga')->nullable();
            $table->string('kriharga')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('model')->nullable();
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
        Schema::dropIfExists('kacamatas');
    }
}
