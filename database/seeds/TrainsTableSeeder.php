<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'agency' => 'Zio Paperone',
                'start_from' => 'Catania',
                'end_to' => 'Stoccolma',
                'starting_time' => '12:00',
                'arriving_time' => '05:00',
                'train_code' => 50,
                'train_carriage' => 5,
                'in_time' => true,
                'cancelled' => false,
            ],
            [
                'agency' => 'Zio Pippo',
                'start_from' => 'Milano',
                'end_to' => 'Bari',
                'starting_time' => '15:00',
                'arriving_time' => '08:00',
                'train_code' => 85,
                'train_carriage' => 9,
                'in_time' => false,
                'cancelled' => true,
            ],
            [
                'agency' => 'Zio Vito',
                'start_from' => 'Ontario',
                'end_to' => 'Tokyo',
                'starting_time' => '17:00',
                'arriving_time' => '12:00',
                'train_code' => 80,
                'train_carriage' => 12,
                'in_time' => true,
                'cancelled' => false,
            ],
            [
                'agency' => 'Zio Gianni',
                'start_from' => 'Nuova Delhi',
                'end_to' => 'Tarim',
                'starting_time' => '19:00',
                'arriving_time' => '18:00',
                'train_code' => 74,
                'train_carriage' => 12,
                'in_time' => true,
                'cancelled' => false,
            ],
            
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->start_from = $train['start_from'];
            $newTrain->end_to = $train['end_to'];
            $newTrain->starting_time = $train['starting_time'];
            $newTrain->arriving_time = $train['arriving_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->train_carriage = $train['train_carriage'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}
