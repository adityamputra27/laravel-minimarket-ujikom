<?php

namespace Database\Factories;

use App\Models\Pemasok;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class PemasokFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pemasok::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'kode_pemasok' => $faker->unique()->numberBetWeen(1000, 100000),
            'nama_pemasok' => $faker->company,
            'alamat' => $faker->address,
            'kota' => $faker->city,
            'no_telp' => $faker->phoneNumber
        ];
    }
}
