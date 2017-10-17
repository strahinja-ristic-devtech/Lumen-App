<?php
/**
 * Created by PhpStorm.
 * User: strahinja.ristic
 * Date: 10/17/2017
 * Time: 9:22 AM
 */

use Faker\Generator as Faker;

$factory->define(App\Flight::class, function (Faker $faker) {
    static $password;

    return [
        'to' => $faker->city,
        'from' => $faker->city
    ];


});