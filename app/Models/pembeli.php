<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembeli extends model
{
    protected $table='tb_pembeli';
    protected $fillable = [
    	'nama',
    	'alamat',
    	'no_tlp',
    	'email',
    	'no_nik',
    	'no_kk'
    ];
}
