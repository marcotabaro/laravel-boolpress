<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Post;
use App\Category;
use App\User;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $categories = Category::all();
    $users = User::all();

    return [
        'title'=>$faker->sentence(5, true),
        'text'=>$faker->text(15),
        'category_id'=>$faker->numberBetween(1, count($categories)),
        'user_id'=>$faker->numberBetween(1, count($users)),
    ];
});
