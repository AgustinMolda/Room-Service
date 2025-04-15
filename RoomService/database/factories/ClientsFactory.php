<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->name(),
            'slug'=> $this->faker->slug(),
            'surename' =>$this->faker->name(),
            'email'=> $this->faker->name(),
            'phone'=>$this->faker->text(),
            'created_at'=>$this->faker->dateTime()
        ];
    }
}
