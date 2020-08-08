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
        'cpf' => $faker->numberBetween(10000000000,99999999999),        
        'rg' => $faker->numberBetween(10000000,99999999),    
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
        'data_nascimento' => $faker->dateTimeBetween($startDate = '-40 years', $endDate = '-12 years', $timezone = null),         
        'cep' => $faker->numberBetween(10,200),
        'rua' => $faker->name,
        'numero' => $faker->numberBetween(0,20),
        'quadra' => $faker->numberBetween(0,20),
        'lote' => $faker->numberBetween(0,20),
        'complemento' => $faker->address,
        'bairro' => $faker->name,
        'cidade' => $faker->city,        
        'uf_selected' => $faker->boolean(50) ? 'GO' : 'SP',
        'sexo_selected' => $faker->boolean(50) ? 'masculino' : 'feminino',
        'idioma_selected' => $faker->boolean(50) ? 'pt-BR' : 'en-US',
        'deleted_at' => $faker->boolean(50) ? now() : null,                                              
    ];
});