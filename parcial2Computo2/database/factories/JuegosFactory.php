<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juegos>
 */
class JuegosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->text(15),
            'categoria'=>$this->faker->text(20),
            'genero'=>$this->faker->text(15),
            'descripcion'=>$this->faker->text(50)
        ];
    }
}
