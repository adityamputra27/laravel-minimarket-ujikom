<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelanggan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_pelanggan' => $this->faker->numberBetween(1000, 100000),
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail
        ];
    }
}
