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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(MiLibreria\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});



$factory->define(MiLibreria\Temas::class, function(Faker\Generator $faker) {
	return [
		'temas' => $faker-> realText(rand(20,160))
	];
});

$factory->define(MiLibreria\Autores::class, function(Faker\Generator $faker) {
	return [
		'nombres' => $faker->name,
		'apellidoPrimero'=> $faker->lastname,
		'apellidoSegundo'=> $faker->lastname,
		'pais'=>$faker->country
	];
});

$factory->define(MiLibreria\Editoriales::class, function(Faker\Generator $faker) {
	return [
		'nombre' => $faker->name
		
	];
});

$factory->define(MiLibreria\Libros::class, function(Faker\Generator $faker) {
	return [
		'titulo' => $faker->name,
		'id_autor' => rand(1,10),

        		'id_editorial' => rand(1,10),

        		'id_tema' => rand(1,10),

        		'user_id' => rand(1,10),


		
	];
});