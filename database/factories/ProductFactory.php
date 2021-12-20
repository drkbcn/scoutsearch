<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->productName,
            'slug' => $this->faker->unique()->slug(),
            'short_description' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'posology' => $this->faker->paragraph(),
            'indications' => $this->faker->paragraph(),
            'contraindications' => $this->faker->paragraph(),
            'precautions' => $this->faker->paragraph(),
            'side_effects' => $this->faker->paragraph(),
            'weight' => $this->faker->randomNumber(4),
            'width' => $this->faker->randomNumber(4),
            'height' => $this->faker->randomNumber(4),
            'depth' => $this->faker->randomNumber(4),
            'active' => $this->faker->boolean()
        ];
    }
}
