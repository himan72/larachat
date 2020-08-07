<?php

use App\Room;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::get()->each(function($room){
           $room->messages()
               ->createMany(factory(\App\Message::class, 3)
                ->make([ 'user_id' => rand(1,2)])
                ->toArray());
        });
    }
}
