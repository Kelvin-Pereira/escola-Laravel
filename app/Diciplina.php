<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Curso;

class Diciplina extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];

        // public function curso(){
        //     return $this->belongsTo('App\Curso');
        // }

}
