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
        Schema::create('rpls', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->integer('ddp');
            $table->integer('prak_ddp');
            $table->integer('prak_basdat');
            $table->integer('basdat');
            $table->integer('pbo');
            $table->integer('prak_pbo');
            $table->integer('rpl');
            $table->integer('basdat_lanjut');
            $table->integer('pem_visual');
            $table->integer('aps');
            $table->integer('tbo');
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
        Schema::dropIfExists('rpls');
    }
};
