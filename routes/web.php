<?php


Route::get('/','Aluno\AlunoController@index');



Route::resource('/aluno','Aluno\AlunoController');
Route::resource('/curso','Curso\CursoController');
Route::resource('/profesor','Professor\ProfesorController');
Route::resource('/turma','Turma\TurmaController');
Route::resource('/turma-aluno','TurmaAluno\TurmaAlunoController');
Route::resource('/disciplina','Disciplina\DisciplinaController');

                                        

