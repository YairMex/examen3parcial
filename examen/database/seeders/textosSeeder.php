<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class textosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en tabla items
        DB::table('items')->insert([
            [
                'texto' => 'Todos los conjuntos de las colaboraciones de Marvel y Fortnite',
                'slug' => 'Marvel',
                'imagen' => 'https://www.tomshw.it/images/images/2022/02/fortnite-x-marvel-216562.jpg'
            ],
            [
                'texto' => 'Todos los conjuntos de las colaboraciones de DC y Fortnite',
                'slug' => 'DC',
                'imagen' => 'https://cdn2.unrealengine.com/fortnite-dark-days-loading-screen-1920x1080-a8eb99351568.jpg'
            ],
            [
                'texto' => 'Todos los conjuntos de las colaboraciones de Iconos y Fortnite',
                'slug' => 'Iconos',
                'imagen' => 'https://as01.epimg.net/meristation/imagenes/2021/03/01/noticias/1614635643_984577_1614636705_sumario_grande.jpg'
            ],
            [
                'texto' => 'Todos los conjuntos de las colaboraciones de Leyendas y Fortnite',
                'slug' => 'Gaming Leyends',
                'imagen' => 'https://allgamersin.com/wp-content/uploads/2020/12/Fortnite_Halo_JefeMaestro.jpg'
            ],
            [
                'texto' => 'Todos los conjuntos de las colaboraciones de Epic y Fortnite',
                'slug' => 'Epic Games',
                'imagen' => 'https://cdn2.unrealengine.com/18br-headband-screenshot-newsheader-1900x600-4fe2c2a08b4b.jpg'
            ],
            [
                'texto' => 'Todos los conjuntos de rareza Legendaria en Fortnite',
                'slug' => 'Legendary',
                'imagen' => 'https://compass-ssl.xbox.com/assets/54/f9/54f9ed2b-1092-4e79-9bec-333f913d918f.jpg?n=Fortnite_gallery-0_1350x759_01.jpg'
            ]
        ]);
    }
}
