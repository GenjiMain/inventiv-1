<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(rand(4,10)),
        'description'=>$faker->paragraph(rand(10,20)),
    ];
});
