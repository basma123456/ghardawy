<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Main;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

//$factory->define(App\Models\Main::class, function (Faker $faker) {
//
////    $image = $faker->image();
//    $imageFile = storage_path('app/public/images');
//    if (!File::exists($imageFile)){
//        File::makeDirectory($imageFile);
//    }
//
//
//    $cat = \App\Models\Category::pluck('id')->toArray();
//
//
////    return [
////        'bg_photo' => $faker->image($imageFile , 640 , 480 , null , false),
////        'title1' => $faker->sentence,
////        'title2' => $faker->sentence,
////        'top_desc' => $faker->paragraph,
////        'left_desc' => $faker->paragraph,
////        'middle_desc' => $faker->paragraph,
////        'right_desc' => $faker->paragraph,
////        'website' => $faker->sentence,
////        'left_upper_cat' => $faker->randomElement($cat),
////        'right_upper_cat' =>$faker->randomElement($cat),
////        'screen_cat' => $faker->randomElement($cat),
////        'bottom_big_cat' => $faker->randomElement($cat),
////        'bottom_left_upper_cat' => $faker->randomElement($cat),
////        'bottom_left_lower_cat' => $faker->randomElement($cat),
//////        'email' => $faker->unique()->safeEmail,
//////        'email_verified_at' => now(),
//////        'remember_token' => Str::random(10),
////
////
////    ];
//});
