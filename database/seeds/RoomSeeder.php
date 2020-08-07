<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Room::class)->create([
            'title' => 'Laravel'
        ]);

        factory(\App\Room::class)->create([
            'title' => 'Vuejs'
        ]);

        factory(\App\Room::class)->create([
            'title' => 'React'
        ]);
    }
}
