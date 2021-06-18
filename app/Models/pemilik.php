<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
   protected $table='tb_pemilik';
    protected $fillable = [
    	'nama_pemilik',
    	'alamat',
    	'no_tlp',
    	'email',
    	'nik'
    ];
}
