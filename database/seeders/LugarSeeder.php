<?php

namespace Database\Seeders;

use App\Models\Lugar;
use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lugaresReales = [
            [
                'nombre' => 'Parque del Agua',
                'descripcion' => 'Reconocido por sus hermosas fuentes, senderos peatonales y abundante vegetación, es un pulmón verde en la ciudad.',
                'ubicacion' => 'Diagonal 32 # 30A-51, Bucaramanga, Santander',
                'imagen_url' => 'https://loremflickr.com/640/480/park,water?random=1',
                'puntuacion' => 4.8,
            ],
            [
                'nombre' => 'Parque San Pío',
                'descripcion' => 'Ubicado en el exclusivo sector de Cabecera, es famoso por albergar la escultura "La Gorda" del maestro Fernando Botero.',
                'ubicacion' => 'Carrera 33 con Calle 45, Cabecera del Llano, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/sculpture,park?random=2',
                'puntuacion' => 4.7,
            ],
            [
                'nombre' => 'Catedral de la Sagrada Familia',
                'descripcion' => 'La catedral más importante de la ciudad, con una arquitectura imponente y vitrales hermosos.',
                'ubicacion' => 'Calle 36 # 18-42, Centro, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/cathedral,church?random=3',
                'puntuacion' => 4.6,
            ],
            [
                'nombre' => 'Viaducto de la Novena',
                'descripcion' => 'Un puente atirantado emblemático que conecta el centro con el sur, ofreciendo vistas espectaculares, especialmente de noche.',
                'ubicacion' => 'Carrera 9 con Calle 45, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/bridge,city?random=4',
                'puntuacion' => 4.9,
            ],
            [
                'nombre' => 'Museo de Arte Moderno de Bucaramanga',
                'descripcion' => 'Espacio dedicado a la promoción de las artes plásticas con exposiciones itinerantes de gran valor cultural.',
                'ubicacion' => 'Calle 37 # 26-16, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/museum,art?random=5',
                'puntuacion' => 4.5,
            ],
            [
                'nombre' => 'Centro Cultural del Oriente',
                'descripcion' => 'Un majestuoso edificio de arquitectura republicana que funciona como centro de eventos y exposiciones.',
                'ubicacion' => 'Carrera 19 # 31-65, Centro, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/culture,building?random=6',
                'puntuacion' => 4.7,
            ],
            [
                'nombre' => 'Teatro Santander',
                'descripcion' => 'La joya cultural de la ciudad, un teatro restaurado que ofrece una programación artística de primer nivel.',
                'ubicacion' => 'Calle 33 # 18-60, Centro, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/theater,stage?random=7',
                'puntuacion' => 4.9,
            ],
            [
                'nombre' => 'Cerro del Santísimo',
                'descripcion' => 'Parque ecológico con una estatua gigante de Cristo y un teleférico que ofrece la mejor vista del área metropolitana.',
                'ubicacion' => 'Hacienda La Esperanza, Floridablanca (Área Metropolitana)',
                'imagen_url' => 'https://loremflickr.com/640/480/statue,view?random=8',
                'puntuacion' => 4.8,
            ],
            [
                'nombre' => 'Jardín Botánico Eloy Valenzuela',
                'descripcion' => 'Un oasis de biodiversidad con colecciones de orquídeas, palmas y una gran variedad de flora regional.',
                'ubicacion' => 'Av. Bucarica, Floridablanca (Área Metropolitana)',
                'imagen_url' => 'https://loremflickr.com/640/480/garden,botanic?random=9',
                'puntuacion' => 4.6,
            ],
            [
                'nombre' => 'Mercado Central de Bucaramanga',
                'descripcion' => 'Lugar ideal para conocer la gastronomía local y comprar productos típicos de la región.',
                'ubicacion' => 'Carrera 18 # 33-20, Centro, Bucaramanga',
                'imagen_url' => 'https://loremflickr.com/640/480/market,food?random=10',
                'puntuacion' => 4.4,
            ],
        ];

        foreach ($lugaresReales as $lugar) {
            Lugar::create($lugar);
        }

        Lugar::factory()->count(90)->create();
    }
}
