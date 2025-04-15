<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'Número_Habitación' => $this->faker->name(10),
           'slug'=> $this->faker->slug(),
           'Tipo_Habitación' => $this->faker->text(),
           'Precio_Noche' => $this->faker->numberBetween(30000,100000),
           'Estado' => $this->faker->name(),
           'created_at' => $this->faker->dateTime()

        ];
    }
}
