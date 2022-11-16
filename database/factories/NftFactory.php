<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nft>
 */
class NftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->sentence(15),
            'uuid' => $this->faker->uuid(),
            'price' => $this->faker->randomNumber(4),
            'url' => Str::slug($name),
            'category' => $this->faker->randomElement($array = array ('common', 'rare', 'especial', 'exceptional', 'legendary'))
        ];
    }
}
