<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Edificio>
 */
class EdificioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name(),
            'slug' => $this->faker->slug(),
            'direccion' => $this->faker->text(),
            'pisos'=> $this->faker->numberBetween(10,50),
            'created_at'=>$this->faker->dateTime()
        ];
    }
}
