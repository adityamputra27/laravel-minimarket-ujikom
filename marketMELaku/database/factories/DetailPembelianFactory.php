<?php

namespace Database\Factories;

use App\Models\DetailPembelian;
use App\Models\Pembelian;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailPembelianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailPembelian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = Pembelian::select('id')->get();
        return [
            'pembelians_id' => $this->faker->randomElement($id),
            'barangs_id' => $this->faker->randomElement(Barang::select('id')->get()),
            'harga_beli' => $this->faker->numberBetWeen(1000, 9999999),
            'jumlah' => $this->faker->numberBetWeen(1, 1000),
            'sub_total' => $this->faker->numberBetWeen(1000, 9999999)
        ];
    }
}
