<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    use HasFactory;

    protected $table = 'detail_pembelians';

    protected $fillable = [
        'pembelians_id', 
        'barangs_id',
        'harga_beli',
        'jumlah',
        'sub_total'
    ];

    public function barangs()
    {
        return $this->belongsTo(Barang::class, 'barangs_id');
    }
}
