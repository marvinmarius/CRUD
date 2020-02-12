<?php

/** @var Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        'firstName'=>$faker->text(20),
        'lastName'=>$faker->text(20),
        'gender'=>$faker->firstName('male'|'female'),
        'country'=>$faker->country,
        'city'=>$faker->city,
        'address'=>$faker->address




    ];
});
