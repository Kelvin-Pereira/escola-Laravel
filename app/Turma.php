<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'disciplina_id',
        'profesore_id',
    ];

    public function disciplina(){
        // return $this->belongsTo('App\Disciplina');
        return  $this->belongsTo('App\Disciplina', 'disciplina_id');
    }

    public function profesosr(){
        return  $this->belongsTo('App\Professore', 'profesore_id');
    }
    // public function aluno(){
    //     return  $this->hasMany('App\Aluno', 'aluno_id');
    // }

   

}
