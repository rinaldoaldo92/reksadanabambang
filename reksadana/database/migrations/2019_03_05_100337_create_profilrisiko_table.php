<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilrisikoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilrisiko', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_nasabah');
            $table->string('kuesionerrisk_1');
            $table->string('kuesionerrisk_2');
            $table->string('kuesionerrisk_3');
            $table->string('kuesionerrisk_4');
            $table->string('kuesionerrisk_5');
            $table->string('kuesionerrisk_6');
            $table->string('totalkuesionerrisk');
            $table->string('profilresiko_nasabah');
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
        Schema::dropIfExists('profilrisiko');
    }
}
