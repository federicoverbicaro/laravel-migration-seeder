<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for($i = 0; $i < 10; $i++){
        Train::create([
            'Azienda' => $faker->company,
            'Stazione_di_partenza' => $faker->city,
            'Stazione_di_arrivo' => $faker->city,
            'Orario_di_partenza' => $faker->time('H:i:s'),
            'Orario_di_arrivo' => $faker->time('H:i:s'),
            'Codice_Treno' => $faker->numberBetween(1000, 9999),
            'Numero_Carrozze' => $faker->numberBetween(1, 10),
            'In_orario' => $faker->boolean,
            'Cancellato' => $faker->boolean,
        ]);
       }
    }
}
