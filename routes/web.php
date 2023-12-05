<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cotacao', 'App\Http\Controllers\CotacaoController@showall');
Route::get('/cotacao/novo', 'App\Http\Controllers\CotacaoController@create');
Route::post('/cotacao/novo', 'App\Http\Controllers\CotacaoController@store')->name('registrar_produto');
Route::get('/cotacao/ver/{id}', 'App\Http\Controllers\CotacaoController@show');
Route::post('/cotacao/ver/{id}', 'App\Http\Controllers\CotacaoController@update')->name('alterar_produto');
Route::get('/cotacao/excluir/{id}', 'App\Http\Controllers\CotacaoController@delete');