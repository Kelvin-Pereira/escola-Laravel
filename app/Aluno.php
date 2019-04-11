<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'cep',
        'logradoro',
        'complemento',
        'bairro',
        'uf',
        'municipio',
        'data_nascimento',
    ];
}
