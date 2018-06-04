<?php

use Faker\Generator as Faker;
use App\Product;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(3), 0, -1),
        'description' => $faker->sentence(10),
        'long_description' => $faker-> text,
        'price' => $faker->randomFloat(0,150000, 500000),
        'Category_id' => $faker-> numberBetween(1,5)

    ];
});
