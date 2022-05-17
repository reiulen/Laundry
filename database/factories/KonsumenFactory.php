<?php

namespace Database\Factories;

use App\Models\Konsumen;
use Illuminate\Database\Eloquent\Factories\Factory;

class KonsumenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Konsumen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_konsumen' => 'KON'.$this->faker->number(),
            'nama_konsumen' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_telepon' => $this->faker->phoneNumber(),
        ];
    }
}
