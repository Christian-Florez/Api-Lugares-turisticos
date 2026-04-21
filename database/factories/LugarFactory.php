<?php

namespace Database\Factories;

use App\Models\Lugar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lugar>
 */
class LugarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $barrios = ['Cabecera del Llano', 'Cañaveral', 'Ciudad Real de Minas', 'Provenza', 'San Alonso', 'La Concordia', 'El Prado', 'Lagos del Cacique', 'Sotomayor', 'Diamante II'];

        return [
            'nombre' => $this->faker->optional(0.7, 'Lugar Turístico')->company().' '.$this->faker->randomElement(['Park', 'Mirador', 'Centro', 'Plaza', 'Museo']),
            'descripcion' => $this->faker->paragraph(3),
            'ubicacion' => $this->faker->streetAddress().', '.$this->faker->randomElement($barrios).', Bucaramanga, Santander',
            'imagen_url' => 'https://loremflickr.com/640/480/bucaramanga,colombia,nature?random='.$this->faker->unique()->numberBetween(1, 1000),
            'puntuacion' => $this->faker->randomFloat(1, 3.5, 5.0),
        ];
    }
}
