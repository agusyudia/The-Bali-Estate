<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbAgen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_agen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_agen');
            $table->string('no_tlp');
            $table->string('lokasi');
            $table->string('email');
            $table->string('perusahaan');
            $table->string('image');
            $table->string('keterangan');
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
