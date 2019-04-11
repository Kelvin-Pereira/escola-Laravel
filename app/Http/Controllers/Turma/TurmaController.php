<?php

namespace App\Http\Controllers\Turma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Turma;
use App\Disciplina;
use App\Professore;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $turmas = Turma::find(1);
        $turmas = Turma::all();
    
        // foreach ($turmas as $item) {
        //     echo $item->disciplina->nome;
        //     // só professor que esta zuado cuidado ip 
        //     echo '<br>';
        //     echo $item->profesosr->nome;die;
        // }
   
        return view('turma.index',compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplinas = Disciplina::all();
        $professores = Professore::all();

        return view('turma.create',compact('disciplinas','professores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $turmas = new Turma($request->all());
         $turmas->save();
         return redirect(route('turma.index') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turmas = Turma::findOrFail($id);                                       
        $turmas->delete();

        return redirect()->route('turma.index');
    }
}
