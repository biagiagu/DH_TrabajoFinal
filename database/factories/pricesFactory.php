<?php

use Faker\Generator as Faker;

$factory->define(App\price::class, function (Faker $faker) {
     $product = \App\product::inRandomOrder()->first();
    return [
        "product_id" => $product->id ,
        "name" => $faker->word,
        "price" => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100000),
        "valid_from"=>now(),
        "valid_to"=>now(),
    ];
});
