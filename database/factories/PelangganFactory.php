<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

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
        $faker = Faker::create('id_ID');
        return [
            'kode_pelanggan' => $faker->unique()->numberBetween(1000, 100000),
            'nama' => $faker->name,
            'alamat' => $faker->address,
            'email' => $faker->unique()->safeEmail,
            'no_telp' => $faker->unique()->phoneNumber
        ];
    }
}
