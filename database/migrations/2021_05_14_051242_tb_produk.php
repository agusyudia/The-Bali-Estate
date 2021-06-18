<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_penjual');
            $table->string('judul');
            $table->string('jenis_property');
            $table->string('sertifikat');
            $table->string('imb');
            $table->string('lokasi');
            $table->string('luas');
            $table->string('surat_tanah');
            $table->string('jml_kamar');
            $table->string('jml_wc');
            $table->string('ket_produk');
            $table->string('image');
            $table->string('status');
            $table->string('harga');
            $table->string('id_agen');
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
        //
    }
}
