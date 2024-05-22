<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $trains = config('trains');
        foreach($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->train_name = $faker->company;
            $newTrain->departure_station = $faker->company;
            $newTrain->arrival_station = $faker->company;
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->price = $faker->randomFloat(2, 0, 100);
            $newTrain->available_seats = $faker->randomDigit;
            $newTrain->save();
        }
    }
}
