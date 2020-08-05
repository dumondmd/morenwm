<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aluno;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cpf' => $faker->numberBetween(1000,2000),        
        'rg' => $faker->numberBetween(1000,2000),    
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
        'data_nascimento' => now(),          
        'cep' => $faker->numberBetween(10,200),
        'rua' => $faker->name,
        'numero' => $faker->numberBetween(0,20),
        'quadra' => $faker->numberBetween(0,20),
        'lote' => $faker->numberBetween(0,20),
        'complemento' => $faker->name,
        'bairro' => $faker->name,
        'cidade' => $faker->name,        
        'uf_selected' => Str::random(2),
        'sexo_selected' => $faker->name,
        'idioma_selected' => $faker->name,                                                   
    ];
});