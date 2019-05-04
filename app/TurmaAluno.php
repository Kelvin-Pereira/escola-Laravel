<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TurmaAluno extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'semestre',
        'turma_id',
        'aluno_id',
    ];

    

}
