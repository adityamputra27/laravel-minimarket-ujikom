<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = [
    	'kode_barang', 'produks_id', 'nama_barang', 'satuan', 'item', 'harga_jual', 'stok'
    ];

    public function getProduks() 
    {
    	return $this->belongsTo(Produk::class, 'produks_id', 'id');
    }
}
