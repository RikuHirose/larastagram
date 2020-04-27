<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        // 'user_id' => factory(App\User::class)->create()->id,
        'description' => $faker->text,
        'img_url' => 'https://c1.staticflickr.com/4/3851/14948376317_a97232356c_z.jpg',
    ];
});
