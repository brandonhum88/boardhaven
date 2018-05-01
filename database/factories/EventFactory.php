<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker -> sentence,
        'description' => $faker -> paragraph,
        'user_id' => 1
    ];
});
