<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\File;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    //    $image = $faker->image();
    $imageFile = storage_path('app/public/images');
    if (!File::exists($imageFile)){
        File::makeDirectory($imageFile);
    }


    $admin = \App\Models\Admin::pluck('id')->toArray();
    $superadmin = \App\Models\SuperAdmin::pluck('id')->toArray();



    return [
        'image' => $faker->image($imageFile , 640 , 480 , null , false),
        'title' => $faker->sentence,
        'likes' =>$faker->randomElement([0,1]),
        'unlikes' => $faker->randomElement([0,1]),
        'about_page' => $faker->paragraph,
        'at_front_page' => $faker->randomElement([0,1]),
        'countPlaces' => 0,
        'admin_id' => null,

        'super_admin_id' => 1,
        'status' =>$faker->randomElement([0,1]),
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'remember_token' => Str::random(10),


    ];
});
