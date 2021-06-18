<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPemilik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pemilik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemilik');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('nik');
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
