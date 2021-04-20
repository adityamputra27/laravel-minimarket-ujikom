<?php

namespace Database\Factories;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenjualanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penjualan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pelangganId = Pelanggan::select('id')->get();
        $userId = User::select('id')->get();
        return [
            'no_faktur' => $this->faker->unique()->numberBetWeen(100000, 999999),
            'tgl_faktur' => $this->faker->date,
            'total_bayar' => $this->faker->numberBetWeen(1000, 9999999),
            'pelanggans_id' => $this->faker->randomElement($pelangganId),
            'users_id' => $this->faker->randomElement($userId),
            'diskon' => $this->faker->randomElement([5, 10, 15, 20, 25, 30])
        ];
    }
}
