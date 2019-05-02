<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatakycnasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakycnasabah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_nasabah');
            $table->string('nama');
            $table->string('identitas_nasabah');
            $table->string('nomorid_nasabah');
            $table->string('alamatid_nasabah');
            $table->string('alamatsurat_nasabah');
            $table->string('kabkotaid_nasabah');
            $table->string('kabkotasurat_nasabah');
            $table->string('provinsiid_nasabah');
            $table->string('provinsisurat_nasabah');
            $table->string('nomortelp_nasabah');
            $table->string('nomorhp_nasabah');
            $table->string('email_nasabah');
            $table->string('pilihankorespondensi_nasabah');
            $table->string('profilresiko_nasabah');
            $table->string('namaibu_nasabah');
            $table->string('gaji_nasabah');
            $table->string('sumbergaji_nasabah');
            $table->string('pendapatanlain_nasabah');
            $table->string('sumberpendapatanlain_nasabah');
            $table->string('pekerjaan_nasabah');
            $table->string('institusi_nasabah');
            $table->string('kabkotainstitusi_nasabah');
            $table->string('provinsiinstitusi_nasabah');
            $table->string('nomortelpinstitusi_nasabah');
            $table->string('nomorfaxinstitusi_nasabah');
            $table->string('emailinstitusi_nasabah');
            $table->string('rekbank_nasabah');
            $table->string('namabank_nasabah');
            $table->string('cabangbank_nasabah');
            $table->string('namarekbank_nasabah');
            $table->string('alamatidortupasangan_nasabah');
            $table->string('alamatsuratortupasangan_nasabah');
            $table->string('kabkotaidortupasangan_nasabah');
            $table->string('kabkotasuratortupasangan_nasabah');
            $table->string('provinsiidortupasangan_nasabah');
            $table->string('provinsisuratortupasangan_nasabah');
            $table->string('nomortelportupasangan_nasabah');
            $table->string('nomorhportupasangan_nasabah');
            $table->string('pekerjaanortupasangan_nasabah');
            $table->string('institusiortupasangan_nasabah');
            $table->string('kabkotainstitusiortupasangan_nasabah');
            $table->string('provinsiinstitusiortupasangan_nasabah');
            $table->string('nomortelpinstitusiortupasangan_nasabah');
            $table->string('nomorfaxinstitusiortupasangan_nasabah');
            $table->string('emailinstitusiortupasangan_nasabah');
            $table->string('ahliwaris_nasabah');
            $table->string('statusahliwaris_nasabah');
            $table->string('namakontakdarurat_nasabah');
            $table->string('statuskontakdarurat_nasabah');
            $table->string('alamatkontakdarurat_nasabah');
            $table->string('nomortelpkontakdarurat_nasabah');
            $table->string('kuesioner1_nasabah');
            $table->string('kuesioner2_nasabah');
            $table->string('kuesioner3_nasabah');
            $table->string('kuesioner4_nasabah');
            $table->string('kuesioner5_nasabah');
            $table->string('kuesioner6_nasabah');
            $table->string('kuesioner7_nasabah');
            $table->string('kuesioner8_nasabah');
            $table->string('kuesioner9_nasabah');
            $table->string('kuesioner10_nasabah');
            $table->string('tandatangan_nasabah');            
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
        Schema::dropIfExists('datakycnasabah');
    }
}
