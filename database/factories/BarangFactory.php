<?php

namespace Database\Factories;

use App\Models\Barang;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $query = Barang::select(DB::raw('MAX(id)'))->get();
        $urutan = (int) substr($query, 4, 4);
        $urutan++;
        $huruf = 'BRG-';
        $kodeBarang = $huruf.sprintf("%04s", $urutan);
        return [
            'kode_barang' => 'BRG-'.sprintf('%08d', $this->faker->unique()->numberBetWeen(1, 99999999)),
            'produks_id' => $this->faker->randomElement(Produk::select('id')->get()),
            'nama_barang' => $this->faker->randomElement(['MIE INDOMIE', 'SUSU FRISIAN FLAG', 'RINSO', 'KOPI GOOD DAY', 'CHIKI TARO']),
            'satuan' => $this->faker->randomElement(['pcs', 'item', 'kardus']),
            'harga_jual' => $this->faker->numberBetween(1000, 1000000),
            'stok' => $this->faker->numberBetween(1, 1000)
        ];
    }
}
