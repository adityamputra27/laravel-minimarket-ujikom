<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $namaProduk = ['SUSU', 'MIE', '	ES KRIM', 'KERIPIK', 'KOPI', 'PAMPERS', 'ROKOK', 'CHIKI', 'DETERJEN', 'SHAMPOO', 'ROTI'];
        return [
            'nama_produk' => $this->faker->randomElement($namaProduk)
        ];
    }
}
