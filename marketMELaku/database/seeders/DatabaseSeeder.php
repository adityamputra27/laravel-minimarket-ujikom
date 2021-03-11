<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();
        \App\Models\Produk::factory(11)->create();
        \App\Models\Barang::factory(11)->create();
        \App\Models\Pemasok::factory(50)->create();
        \App\Models\Pelanggan::factory(50)->create();
        \App\Models\Pembelian::factory(50)->create();
        \App\Models\Penjualan::factory(50)->create();
        \App\Models\TampungBayar::factory(50)->create();
        \App\Models\DetailPembelian::factory(50)->create();
        \App\Models\DetailPenjualan::factory(50)->create();
    }
}
