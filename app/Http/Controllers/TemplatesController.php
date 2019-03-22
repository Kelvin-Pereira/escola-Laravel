<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function index(){
       
        $nome = "kelvin";
        $nota = 7;

        $aCarro = ['Maserati','Fusca','Ferrari','Gol','Pálio'];

        return view('layouts.app',compact('nome','aCarro','nota'));
    }
    public function pagina2(){

        return view('pagina2');
    }
    public function pagina3(){

        return view('pagina3');
    }
}
