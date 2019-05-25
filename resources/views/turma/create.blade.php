@extends('layouts.padrao')

@section('conteudo')
<h1>Turma</h1>   

{{ Form::open([ 'method'  => 'POST', 'route' => [ 'turma.store' ] ]) }}
@csrf   


<div class="row">
   
   <div class="col-3">
    <select class="custom-select" name="disciplina_id" required>
        <option value="">disciplina</option>
        @foreach ($disciplinas as $disciplina)

        <option value=" {{$disciplina->id}} "> {{$disciplina->nome}} </option>
        
        @endforeach
    </select>
    </div>
    <div class="col-3">
        <select class="custom-select" name="profesore_id" required>
            <option value="">Professor</option>
            @foreach ($professores as $professor)
    
            <option value=" {{$professor->id}} "> {{$professor->nome}} </option>
            
            @endforeach
        </select>
        </div>
<br>
<!-- Submit -->
<div class="text-right">
       {{Form::reset('reset', ['class'=>'btn '])}}
       {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
 </div>
 </div>

{{ Form::close() }}

@endsection
