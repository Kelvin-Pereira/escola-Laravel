<?php

namespace App\Http\Controllers\Disciplina;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use App\Curso;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $disciplinas = Disciplina::all();
        return view('disciplina.index',compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('disciplina.create',\compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
         $disciplina = new Disciplina();

         if($request->id){
             $disciplina = $disciplina->find($request->id);
         }
 
         $disciplina->fill($request->all());
 
         // UPLOADER de arquivo
         $arquivo = $request->file('foto');
 
         if(!$arquivo->getError()){
             $arquivo->store('disciplina');
             $disciplina->foto = $arquivo->hashName();
         }
   
        
          $disciplina->save();
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
        $disciplinas = Disciplina::findOrFail($id);                                       
        $disciplinas->delete();

        return redirect()->route('disciplinas.index');
    }
}
