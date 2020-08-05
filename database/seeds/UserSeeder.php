<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
           'name' => 'User1',
           'email' => 'user1@test.test'
        ]);
        factory(\App\User::class)->create([
            'name' => 'User2',
            'email' => 'user2@test.test'
        ]);
    }
}
