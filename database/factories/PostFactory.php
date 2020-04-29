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
    $imgs = [
      'https://c1.staticflickr.com/4/3851/14948376317_a97232356c_z.jpg',
      'https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1502630859934-b3b41d18206c?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1498471731312-b6d2b8280c61?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1515023115689-589c33041d3c?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1504214208698-ea1916a2195a?w=500&h=500&fit=crop',
      'https://images.unsplash.com/photo-1515814472071-4d632dbc5d4a?w=500&h=500&fit=crop',
    ];

    return [
        // 'user_id' => '1',
        'user_id' => factory(App\User::class)->create()->id,
        'description' => 'looks greate',
        'img_url' => $imgs[rand(0, 8)],
    ];
});
