<?php

namespace Database\Factories;

use App\Models\TampungBayar;
use App\Models\Penjualan;
use Illuminate\Database\Eloquent\Factories\Factory;

class TampungBayarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TampungBayar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = Penjualan::select('id')->get();
        return [
            'penjualans_id' => $this->faker->randomElement($id),
            'total' => $this->faker->numberBetWeen(1000, 9999999),
            'terima' => $this->faker->numberBetWeen(1000, 9999999),
            'kembali' => $this->faker->numberBetWeen(1000, 9999999),
        ];
    }
}
