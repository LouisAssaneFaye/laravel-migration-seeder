<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<150 ; $i++){
            $newTrain= new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza=$faker->name();
            $newTrain->stazione_di_arrivo=$faker->name();
            $newTrain->orario_di_partenza=$faker->name();
            $newTrain->orario_di_arrivo=$faker->name();
            $newTrain->codice_treno=$faker->name();
            $newTrain->numero_di_carrozze=$faker->name();
            $newTrain->in_orario=$faker->name();
            $newTrain->cancellato=$faker->name();
            $newTrain->save();


        }
    }
}
