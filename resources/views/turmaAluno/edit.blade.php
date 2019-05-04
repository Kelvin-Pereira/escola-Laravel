@extends('layouts.app')

@section('conteudo')
<h1>Turma </h1>   

{{ Form::open([ 'method'  => 'PUT', 'route' => [ 'turma-aluno.update', $turmaAluno->id  ] ]) }}
@csrf   
<div class="row">

   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::number('title', '', ['class' => 'form-control','name'=>'semestre']) }}
       </div>
   </div>
  
   <div class="col-3">
        <select class="custom-select" name="turma_id" required>
            <option value=" {{ $turmaAluno->turma_id }} "> {{ $turmaAluno->turma_id  }} </option>
            @foreach ($turmas as $turma)
    
            <option value=" {{$turma->id}} "> {{$turma->id}} </option>
            
            @endforeach
        </select>
        </div>
        <div class="col-3">
            <select class="custom-select" name="aluno_id" required>
                <option value="  {{ $turmaAluno->aluno_id  }}  "> {{ $turmaAluno->aluno_id  }} </option>
                @foreach ($alunos as $aluno)
        
                <option value=" {{$aluno->id}} "> {{$aluno->nome}} </option>
                
                @endforeach
            </select>
            </div>

</div>
<br>
<!-- Submit -->
<div class="text-right">
       {{Form::reset('reset', ['class'=>'btn '])}}
       {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
 </div>

{{ Form::close() }}

@endsection
