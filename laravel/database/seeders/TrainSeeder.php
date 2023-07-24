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
            $newTrain->Azienda = $faker->name();
            $newTrain->Stazione_di_partenza=$faker->name();
            $newTrain->Stazione_di_arrivo=$faker->name();
            $newTrain->Orario_di_partenza=$faker->name();
            $newTrain->Orario_di_arrivo=$faker->name();
            $newTrain->Codice_treno=$faker->name();
            $newTrain->Numero_di_carrozze=$faker->name();
            $newTrain->In_orario=$faker->name();
            $newTrain->Cancellato=$faker->name();
            $newTrain->save();


        }
    }
}
