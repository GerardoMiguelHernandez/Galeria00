<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $admin="Administrador";

    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'tipo' => $admin,
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Category::class, function (Faker\Generator $faker) {
   

    return [
        'name' => $faker->name,
        'description' => str_random(10),
    ];
});

$factory->define(App\Work_center::class, function (Faker\Generator $faker) {
   

    return [

        'name' => $faker->name,
        'ciudad' => $faker->city,
        'region'=>$faker->randomElement(['Costa','Istmo','Papaloapan','Sierra Norte','Sierra Sur','Mixteca','Valles Centrales']),
       
    ];
});


$factory->define(App\Event::class, function (Faker\Generator $faker) {
   

    return [

        'nombre' => $faker->name,
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'lugar'=>$faker->address,
        'descripcion' =>$faker->text($maxNbChars = 200),
        'imagen'=> $faker->imageUrl($width = 506, $height = 295),
        'category_id' => factory(App\Category::class)->create()->id,
        'centro_id' => factory(App\Work_center::class)->create()->id,
    ];
});

$factory->define(App\Album::class, function (Faker\Generator $faker) {
   

    return [

        'nombre' => $faker->name,
        'imagen' => $faker->imageUrl($width = 506, $height = 295),
        'descripcion' =>$faker->text($maxNbChars = 200),
       
    ];
});


$factory->define(App\Image::class, function (Faker\Generator $faker) {
   

    return [
   
        'image' => $faker->imageUrl($width = 3840, $height = 2169),
        'descripcion' =>$faker->text($maxNbChars = 200),
       'usuario_id' => factory(App\User::class)->create()->id,
        'evento_id' => factory(App\Event::class)->create()->id,
        'album_id' => factory(App\Album::class)->create()->id,
    ];
});