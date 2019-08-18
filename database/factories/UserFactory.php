<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Banner;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'user_id'=> factory("App\User")->create()->id,//user_id ro ye id bezar barash
       'strite' =>$faker->streetAddress,
        'city' =>$faker->city,
        'zip'  =>$faker->postcode,
        'state'=>$faker->state,
        'country' =>$faker->country,
        'price' =>$faker->numberBetween(10000,50000),
        'description' =>$faker->paragraphs(3,true),
        
        
    ];
});
