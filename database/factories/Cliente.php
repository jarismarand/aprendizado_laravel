<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
        
$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->safeEmail,
        'endereco' => $faker->streetAddress
    ];
});

$factory->define(App\Telefone::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'telefone'=>$faker->phoneNumber
    ];
});

