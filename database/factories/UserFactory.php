<?php

use App\User;
use App\Thread;
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
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(123456), // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Thread::class, function ($faker) {
    return [
        // 'user_id' => 'factory:App\User',
        // pass the 'user_id' as argument in your seeder
        'title' => $faker->sentence,
        'content' => $faker->paragraph
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    $user_ids = User::pluck('id');
    $thread_ids = Thread::pluck('id');

    return [
        'content' => $faker->realText(200,2),
        'user_id' => $user_ids->random(),
        'thread_id' => $thread_ids->random(),
    ];
});
