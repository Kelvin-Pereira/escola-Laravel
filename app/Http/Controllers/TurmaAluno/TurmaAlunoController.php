<?php

namespace App\Http\Controllers\TurmaAluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TurmaAluno;
use App\Turma;
use App\Aluno;

class TurmaAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = TurmaAluno::all();
        return view('turmaAluno.index',compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos = Aluno::all();
        $turmas = Turma::all();
        return view('turmaAluno.create',compact('alunos','turmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turmas = new TurmaAluno($request->all());
        $turmas->save();
        return redirect(route('turma-aluno.index') );
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
       $turmaAluno = TurmaAluno::findOrFail($id); 
       $alunos = Aluno::all();
       $turmas = Turma::all();
       return view('turmaAluno.edit',compact('alunos','turmas','turmaAluno'));

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
        $turmaAluno = TurmaAluno::find($id);

        $turmaAluno = TurmaAluno::find($id);
        $turmaAluno ->update($request->all());
        $turmaAluno->save();
     
        return redirect()->route('turma-aluno.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turmaAlunos = TurmaAluno::findOrFail($id);                                       
        $turmaAlunos->delete();

        return redirect()->route('turma-aluno.index');
    }
}
