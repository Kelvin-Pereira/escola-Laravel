@extends('layouts.app');

@section('conteudo')
<h1>Curso</h1>   

{{ Form::open([ 'method'  => 'PUT', 'route' => ['curso.update', $cursos->id ] ]) }}
{{-- <form action="/curso" method="PUT" enctype="multipart/form-data" > --}}
@csrf   
<div class="row">
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Nome', '',) }}
           {{ Form::text('title',  $cursos->nome, ['class' => 'form-control','name'=>'nome']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Duração:', '',) }}
           {{ Form::number('title',  $cursos->duracao, ['class' => 'form-control','name'=>'duracao']) }}
       </div>
   </div>
</div>

   <div class="form-group">
       <label for="">Foto</label>
   <img  width="100%" src="/storage/cursos/{{$cursos->foto}}" alt="{{$cursos->nome}}">
   <input type="file" class="form-group" name="foto">

   </div>

<br>
<!-- Submit -->
<div class="">
       {{Form::reset('reset', ['class'=>'btn btn-info'])}}
       {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
 </div>

{{ Form::close() }}

@endsection
