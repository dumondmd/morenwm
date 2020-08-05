<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/aluno/ativos', 'AlunoController@showAtivos')->name("aluno.showAtivos");
Route::get('/aluno/excluidos', 'AlunoController@showExcluidos')->name("aluno.showExcluidos");
Route::get('/aluno/{id}', 'AlunoController@showId')->name("aluno.showId");
Route::post('/aluno', 'AlunoController@store')->name("aluno.store");
Route::delete('/aluno/{id}', 'AlunoController@update')->name("aluno.update");
Route::put('/aluno/{id}', 'AlunoController@update')->name("aluno.update");
