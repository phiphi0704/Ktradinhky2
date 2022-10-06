<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\T_Food>
 */
class T_FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker-> name(),
            'description' =>$this->faker->word(),
            'unit_price'=> $this->faker->lexify(),
            'unit_promotion'=> $this->faker->lexify(),
            'image' => rand(1,7).'.jpg',
        ];
    }
}
