<?php

namespace App\Http\Controllers\Aluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aluno;
use App\Municipio;
use App\Uf;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.index',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        $ufs = Uf::all();
        return view('aluno.create',compact('ufs','municipios'));
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
        $aluno = new Aluno();

        if($request->id){
            $aluno = $aluno->find($request->id);
        }

        $aluno->fill($request->all());

        // UPLOADER de arquivo
        $arquivo = $request->file('foto');

        if(!$arquivo->getError()){
            $arquivo->store('alunos');
            $aluno->foto = $arquivo->hashName();
        }
  
       
         $aluno->save();
         return redirect(route('aluno.index') );


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
        $alunos = Aluno::find($id);
        return view('aluno.edit', array('alunos'=>$alunos));
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
        $alunos = Aluno::find($id);
        $alunos ->update($request->all());
        $alunos->save();
     
        return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alunos = Aluno::findOrFail($id);           
       $alunos->delete();                              
       return redirect()->route('aluno.index');
    }

    public function verificarEmail($email){


        $qtd =  Aluno::where('email',$email)->count();
        $mensagem = $qtd ? "Já existe um registro  com o e-mail {$email} ": 'não existe registro com o email informado';
        return [
            'existe' => (bool) $qtd,
            'mensagem' => $mensagem,
        ];
    }


}
