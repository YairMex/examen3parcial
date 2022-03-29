<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ubicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar datos en la tabla ubicaciones
        DB::table('ubicaciones')->insert([
            [
            'nombre' => 'CONEY CROSSROADS',
            'coordenadasX' => '25568',
            'coordenadasY' => '17728',
            'coordenadasZ' => '8704',
            'slug' => 'CreamyCrossroads'
            ],
            [
            'nombre' => 'SLEEPY SOUND',
            'coordenadasX' => '75776',
            'coordenadasY' => '19968',
            'coordenadasZ' => '8704',
            'slug' => 'SleepySound'
            ],
            [
            'nombre' => 'CONDO CANYON',
            'coordenadasX' => '-80384',
            'coordenadasY' => '56832',
            'coordenadasZ' => '8704',
            'slug' => 'CondoCanyon'
            ],
            [
                'nombre' => 'COMMAND CAVERN',
                'coordenadasX' => '39492',
                'coordenadasY' => '-76396',
                'coordenadasZ' => '8704',
                'slug' => 'CrazyCave'
            ],
            [
                'nombre' => 'THE FORTRESS',
                'coordenadasX' => '25344',
                'coordenadasY' => '-43392',
                'coordenadasZ' => '8704',
                'slug' => 'TheFortress'
            ],
            [
                'nombre' => 'CRISPY CRATER',
                'coordenadasX' => '-68096',
                'coordenadasY' => '-74752',
                'coordenadasZ' => '8704',
                'slug' => 'Crater.01'
            ],
            [
                'nombre' => 'ROCKY REELS',
                'coordenadasX' => '-48128',
                'coordenadasY' => '512',
                'coordenadasZ' => '8704',
                'slug' => 'RockyReels'
            ],
            [
                'nombre' => 'SHIFTY SHAFTS',
                'coordenadasX' => '57856',
                'coordenadasY' => '-12800',
                'coordenadasZ' => '8704',
                'slug' => 'ShiftyShafts'
            ],
            [
                'nombre' => 'LOGJAM LUMBERYARD',
                'coordenadasX' => '77312',
                'coordenadasY' => '-44032',
                'coordenadasZ' => '8704',
                'slug' => 'LogjamLumberyard'
            ],
            [
                'nombre' => 'CAMP CUDDLE',
                'coordenadasX' => '2048',
                'coordenadasY' => '-100864',
                'coordenadasZ' => '8704',
                'slug' => 'CampCuddle'
            ],
            [
                'nombre' => 'GREASY GROVE',
                'coordenadasX' => '-50176',
                'coordenadasY' => '-64000',
                'coordenadasZ' => '8704',
                'slug' => 'GreasyGrove'
            ],
            [
                'nombre' => 'SANCTUARY',
                'coordenadasX' => '-10240',
                'coordenadasY' => '48640',
                'coordenadasZ' => '8704',
                'slug' => 'Sanctuary'
            ],
            [
                'nombre' => 'CHONKERS SPEEDWAY',
                'coordenadasX' => '-94208',
                'coordenadasY' => '22528',
                'coordenadasZ' => '8704',
                'slug' => 'ChonkersSpeedway'
            ],
            [
                'nombre' => 'TILTED TOWERS',
                'coordenadasX' => '-6960',
                'coordenadasY' => '-29540',
                'coordenadasZ' => '8704',
                'slug' => 'TiltedTowers'
            ],
            [
                'nombre' => 'SYNAPSE STATION',
                'coordenadasX' => '-100096',
                'coordenadasY' => '-28928',
                'coordenadasZ' => '8704',
                'slug' => 'SynapseStation'
            ],
            [
                'nombre' => 'THE DAILY BUGLE',
                'coordenadasX' => '42496',
                'coordenadasY' => '56320',
                'coordenadasZ' => '8704',
                'slug' => 'TheDailyBugle'
            ],
            [
                'nombre' => 'THE JONESES',
                'coordenadasX' => '-45056',
                'coordenadasY' => '76800',
                'coordenadasZ' => '8704',
                'slug' => 'TheJoneses'
            ]
        ]);
    }
}
