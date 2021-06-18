<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addimage extends Model
{
   protected $table='tb_image';
    protected $fillable = [
    	'id_produk',
    	'image'
    ];
}
