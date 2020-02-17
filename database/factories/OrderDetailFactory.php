<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Orderdetail;
use Faker\Generator as Faker;

$factory->define(Orderdetail::class, function (Faker $faker) {

    return [
        'status' => $faker->word,
        'equipment_id' => $faker->word,
        'num' => $faker->randomDigitNotNull,
        'unit_price' => $faker->word,
        'order_id' => $faker->word,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
