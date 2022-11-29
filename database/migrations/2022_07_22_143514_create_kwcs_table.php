<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwcs', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->integer('data_mining');
            $table->integer('tekweb');
            $table->integer('prak_tekweb');
            $table->integer('sda');
            $table->integer('prak_sda');
            $table->integer('dasar_algoritma');
            $table->integer('jumlah');
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
        Schema::dropIfExists('kwcs');
    }
};
