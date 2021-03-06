<?php

namespace App\Http\Controllers\Professor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Professore;
use App\Aluno;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professore::all();
        return view('professor.index',compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $professor = new Professore();

        if($request->id){
            $professor = $professor->find($request->id);
        }

        $professor->fill($request->all());

        // UPLOADER de arquivo
        $arquivo = $request->file('foto');

        if(!$arquivo->getError()){
            $arquivo->store('professor');
            $professor->foto = $arquivo->hashName();
        }
  
       
         $professor->save();
         return redirect(route('profesor.index') );

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
        $professor = Professore::find($id);
        
        return view('professor.edit', array('professor'=>$professor));
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
        $professor = Professore::find($id);
        $professor ->update($request->all());
        $professor->save();
     
        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professores = Professore::findOrFail($id);                                       
        $professores->delete();

        return redirect()->route('profesor.index');
    }
    public function verificarNome($nome)
    {
        $nomeAlunos = Aluno::where('nome',$nome = $nome)->count();
        $nomeProfessor = Professore::where('nome',$nome = $nome)->count();

        // $qtd =  Professore::find('nome',$nome)->count();
        $mensagem = "existe $nomeAlunos Alunos com o mesmo nome e $nomeProfessor Professores com o mesmo nome ";
        return [
            'mensagem' => $mensagem,
        ];
    }
    public function verificarcpf($cpf)
    {

        $qtd = Professore::where('cpf',$cpf = $cpf)->count();

        $mensagem = $qtd ? "Já existe um cpf {$cpf} ": ' ';
        return [
            'existe' => (bool) $qtd,
            'mensagem' => $mensagem,
        ];
    }
}
