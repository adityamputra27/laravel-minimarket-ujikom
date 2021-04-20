<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelians';

    protected $fillable = [
        'kode_masuk',
        'tanggal_masuk',
        'total',
        'pemasoks_id',
        'users_id'
    ];

    public function pemasoks() 
    {
        return $this->belongsTo(Pemasok::class, 'pemasoks_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function detailPembelians()
    {
        return $this->hasMany(DetailPembelian::class, 'pembelians_id');
    }
}
