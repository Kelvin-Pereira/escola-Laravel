@extends('layouts.padrao');

@section('conteudo')
<h1>Disciplina</h1>   

{{-- {{ Form::open([ 'method'  => 'POST', 'route' => [ 'disciplina.create' ] ]) }} --}}
<form action="/disciplina" method="post" enctype="multipart/form-data" >
@csrf   
<div class="row">
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Nome', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'nome']) }}
       </div>
   </div>

   <div class="form-group col-3">
    <label for="exampleFormControlSelect1">curso</label>
    <select class="form-control" id="exampleFormControlSelect1" name="curso_id" required>
        <option value="">Selecione o curso</option>
            @foreach ($cursos as $curso)
            <option value=" {{$curso->id}} "> {{$curso->nome}} </option>
            @endforeach
    </select>
  </div>

   <div class="col-2">
        <div class="form-group bmd-form-group">
            <label for="">Foto</label>
            <input type="file" clas="form-control" name="foto">
        </div>
    </div>
</div>

</div>
<br>
<!-- Submit -->
<div class="">
       {{Form::reset('reset', ['class'=>'btn '])}}
       {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
 </div>

{{ Form::close() }}

@endsection
