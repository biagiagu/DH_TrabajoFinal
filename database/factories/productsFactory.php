<?php

use Faker\Generator as Faker;

$factory->define(App\product::class, function (Faker $faker) {

     $category = \App\Category::inRandomOrder()->first();

    return [
        "name" => $faker->word,
        "description" => $faker->sentence($nbWords = 6, $variableNbWords = true),
        "paused"=>"0",
        "initial_stock" => $faker->numberBetween(0,100),
        "category_id" => $category->id
    ];
});
