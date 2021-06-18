<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class agen extends Model
{
   protected $table='tb_agen';
    protected $fillable = [
    	'nama_agen',
    	'no_tlp',
        'gender',
        'lokasi',
    	'email',
    	'perusahaan',
    	'image',
    	'keterangan'
    ];
}
