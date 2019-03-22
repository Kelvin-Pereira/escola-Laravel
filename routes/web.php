<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/media/aluno','media\MediaController');


Route::get('/pagina2', 'TemplatesController@pagina2');
Route::get('/pagina3', 'TemplatesController@pagina3');

Route::get('/media', 'media\MediaController@index');
Route::post('/calcular-media', 'Media\MediaController@calcularMedia');

//Route::get('/', 'escolaController@index');
Route::get('/responsavel', 'responsavelController@index');
Route::post('/novoResponsavel', 'responsavelController@salvar');

Route::get('/template', 'TemplatesController@index');

//curso
Route::get('/curso', 'CursoController@index');
Route::get('/curso/create', 'CursoController@create');