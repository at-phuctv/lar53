<?php
/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ? : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
//Factory for Category model
$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'introduce' => $faker->text(50),
    ];
});

//Factory for News model
$factory->define(App\Models\News::class, function (Faker\Generator $faker) {
    return [
        'introduce' => $faker->text(50),
        'content' => $faker->text(200),
        'image' => $faker->image(),
        'title' => $faker->title,
    ];
});
