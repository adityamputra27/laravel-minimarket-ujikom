<?php

namespace Database\Factories;

use App\Models\Pembelian;
use App\Models\Pemasoks;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembelianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pembelian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = Pemasoks::select('id')->get();
        return [
            'kode_masuk' => $this->faker->unique()->numberBetWeen(1000, 100000),
            'tanggal_masuk' => $this->faker->date,
            'total' => $this->faker->numberBetWeen(1000, 1000000),
            'pemasoks_id' => $this->faker->randomElement($id),
            'users_id' => '1'
        ];
    }
}
