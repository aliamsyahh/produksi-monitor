<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanandetail extends Model
{
    protected $table = 'pesanan_detail';
    protected $fillable = [
        'id_product','id_pesanan','id_aksesoris','qty_product','qty_aksesoris'
    ];
}
