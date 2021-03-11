<?php

namespace Database\Factories;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailPenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailPenjualan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $penjualanId = Penjualan::select('id')->get();
        $barangId = Barang::select('id')->get();
        return [
            'penjualans_id' => $this->faker->randomElement($penjualanId),
            'barangs_id' => $this->faker->randomElement($barangId),
            'harga_jual' => $this->faker->numberBetWeen(1000, 99999999),
            'jumlah' => $this->faker->numberBetWeen(1, 9999),
            'sub_total' => $this->faker->numberBetWeen(1000, 99999999)
        ];
    }
}
