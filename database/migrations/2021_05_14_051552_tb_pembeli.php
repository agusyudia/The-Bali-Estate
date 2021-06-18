<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('no_nik');
            $table->string('no_kk');
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
