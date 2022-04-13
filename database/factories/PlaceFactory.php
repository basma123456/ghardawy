<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Place;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;

$factory->define(Place::class, function (Faker $faker) {
    $imageFile = storage_path('app/public/images');
    if (!File::exists($imageFile)){
        File::makeDirectory($imageFile);
    }


    $cat = \App\Models\Category::pluck('id')->toArray();
    $seller = \App\Models\Seller::pluck('id')->toArray();


    return [

        'title' => $faker->sentence,
        'address' => $faker->paragraph,
        'email' => $faker->unique()->safeEmail,

        'phone' => $faker->word,
        'desc' => $faker->paragraph,

        'status' => $faker->randomElement([0,1]),
        'likes' =>$faker->randomElement([0,100000]),
        'unlikes' => $faker->randomElement([0,2000]),
        'category_id' => $faker->randomElement($cat),
        'seller_id' => $faker->randomElement($seller),
        'joining_date' => now(),
        'admin_id' => null,
        'super_admin_id' => $faker->randomElement([1]),

//        'email_verified_at' => now(),
//        'remember_token' => Str::random(10),


    ];
});
