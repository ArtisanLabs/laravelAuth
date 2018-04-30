<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => 'user@test.com',
        'password' => bcrypt('12345678'), // 12345678
        'remember_token' => str_random(10),
    ];
});

// Create a new admin
$factory->define(App\Admin::class, function (Faker $faker) {
	return [
		'email' => 'artisan@test.com',
		'password' => bcrypt('secret')
	];
});