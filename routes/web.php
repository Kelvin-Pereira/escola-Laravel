<?php


//Route::resource('/media/aluno','media\MediaController');



//curso
Route::resource('/aluno','Aluno\AlunoController');
Route::resource('/curso','Curso\CursoController');
Route::resource('/profesor','Professor\ProfesorController');
Route::resource('/turma','Turma\TurmaController');
Route::resource('/turma-aluno','TurmaAluno\TurmaAlunoController');
//Route::resource('/disciplina','disciplina\DisciplinaController');
                                        

