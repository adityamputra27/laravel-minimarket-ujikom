<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TampungBayar extends Model
{
    use HasFactory;

    protected $table = 'tampung_bayars';
    protected $fillable = ['penjualans_id', 'total', 'terima', 'kembali'];
}
