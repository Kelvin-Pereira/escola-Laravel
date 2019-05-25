<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {


    Route::get('/','Aluno\AlunoController@index');

//# Aluno ajax
Route::get('/verificar-email/{email}','Aluno\AlunoController@verificarEmail');

// curso listagem
Route::get('/curso/listar/{curso?}','Curso\CursoController@listar');

//# Professor ajax
Route::get('/verificar-nome/{nome}','Professor\ProfesorController@verificarNome');
Route::get('/verificar-cpf/{cpf}','Professor\ProfesorController@verificarcpf');



Route::resource('/aluno','Aluno\AlunoController');
Route::resource('/curso','Curso\CursoController');
Route::resource('/profesor','Professor\ProfesorController');
Route::resource('/turma','Turma\TurmaController');
Route::resource('/turma-aluno','TurmaAluno\TurmaAlunoController');
Route::resource('/disciplina','Disciplina\DisciplinaController');

                                        


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
