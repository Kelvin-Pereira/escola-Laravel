<?php

namespace App\Http\Controllers\Media;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function index(){

        return View('media.index');
    }

    public function calcularMedia(Request $request){


        $nome = $request->nome;
        $media = ($request->nota1 + $request->nota2 + $request->nota3 + $request->nota4 )/4;

        return View('Media.resultado',compact('nome','media'));
                                           

    }
}
