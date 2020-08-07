<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        //'user_id' => factory(\App\User::class),
        //'room_id' => factory(\App\Room::class),
    ];
});
