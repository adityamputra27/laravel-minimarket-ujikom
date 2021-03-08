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
        // \App\Models\User::factory(50)->create();
        // \App\Models\Produk::factory(11)->create();
        // \App\Models\Barang::factory(11)->create();
        // \App\Models\Pemasok::factory(50)->create();
        \App\Models\Pelanggan::factory(5)->create();
    }
}
