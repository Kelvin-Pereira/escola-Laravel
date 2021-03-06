<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nome',
        'duracao',
        'foto',
    ];

    public function disciplinas(){
        return $this->hasMany('App\Disciplina');
     
    }

}
