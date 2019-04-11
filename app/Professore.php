<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professore extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'nome',
        'matricula',
        'cpf',
        'telefone',
        'email',
        'cep',
        'logradouro',
        'complemento',
        'bairro',
        'uf',
        'municipio',
    ];

    

}
