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
        Schema::create('jarkoms', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->integer('sistem_tekinf');
            $table->integer('jarkom');
            $table->integer('prak_jarkom');
            $table->integer('sistem_digital');
            $table->integer('aok');
            $table->integer('keamanan_info');
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
        Schema::dropIfExists('jarkoms');
    }
};
