<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Post;
use App\Models\User;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'extract' => $faker->text(100),
        'body' => $faker->text(800),
        'user_id' => User::pluck('id')->random(),
    ];
});
