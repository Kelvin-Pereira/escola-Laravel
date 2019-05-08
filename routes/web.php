<?php


Route::get('/','Aluno\AlunoController@index');

//# Aluno ajax
Route::get('/verificar-email/{email}','Aluno\AlunoController@verificarEmail');

//# Professor ajax
Route::get('/verificar-nome/{nome}','Professor\ProfesorController@verificarNome');
Route::get('/verificar-cpf/{cpf}','Professor\ProfesorController@verificarcpf');



Route::resource('/aluno','Aluno\AlunoController');
Route::resource('/curso','Curso\CursoController');
Route::resource('/profesor','Professor\ProfesorController');
Route::resource('/turma','Turma\TurmaController');
Route::resource('/turma-aluno','TurmaAluno\TurmaAlunoController');
Route::resource('/disciplina','Disciplina\DisciplinaController');

                                        

