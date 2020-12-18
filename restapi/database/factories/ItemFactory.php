<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\items;


$factory->define(items::class, function (Faker $faker) {
    return [
        'NISN'->$faker->numberBetween(0,99999999999),
        'name' ->$faker->sentence,
        'flase_of_birth' ->$faker->sentence,
        'birth' ->$faker->date,
        'mathers_name' ->$faker->sentence,
    ];
});
