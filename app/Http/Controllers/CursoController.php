<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
   
    public function index(){

        $curso = new Curso();
        
        // Curso::destroy(4);
        // $curso = new Curso();
        // $curso->nome = 'Enfermagem';
        // $curso->duracao = 5;
        // $curso->save();
        //  return Curso::all(); //returma um json comtudo do banco
        // return view('Cursos.index');

    }
    public function create(){

        return view('Cursos.formulario');

    }
    public function media(){

        return view('media');

    }
  




}
