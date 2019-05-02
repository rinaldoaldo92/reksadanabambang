<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoprodukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoproduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk');
            $table->string('jenis_produk');
            $table->string('bank_kustodian');
            $table->string('keterangan');
            $table->string('portofolio');
            $table->string('fundfactsheet');
            $table->string('prospektus');
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
        Schema::dropIfExists('infoproduk');
    }
}
