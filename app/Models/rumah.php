<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rumah extends model
{
    protected $table='tb_produk';
    protected $fillable = [
        'id',
        'nama_penjual',
    	'judul',
        'jenis_property',
        'sertifikat',
    	'imb',
    	'lokasi',
    	'luas',
    	'surat_tanah',
    	'jml_kamar',
    	'jml_wc',
    	'ket_produk',
    	'image',
    	'status',
        'harga',
        'id_agen'
    ];
}

