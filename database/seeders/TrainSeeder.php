<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // svuota ogni volta la tabella
        // DB::table('houses')->truncate();



        for ($i=0; $i < 20 ; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->text(15);
            $newTrain->stazione_di_partenza = $faker->text(20);
            $newTrain->stazione_di_arrivo = $faker->text(20);
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->bothify('??-######');
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->optional();
            $newTrain->cancellato = $faker->optional();

            $newTrain->save();
        }
    }
}
