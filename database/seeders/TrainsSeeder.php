<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 21; $i++) {

            $newTrain = new Train();

            $newTrain->azienda = $faker->userName();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-10 days', '+1 month')->format('Y-m-d H:i:s');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-10 days', '+1 month')->format('Y-m-d H:i:s');
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->codice_treno = $faker->numberBetween(0, 1000);
            $newTrain->numero_carrozze = $faker->numberBetween(0, 9);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
