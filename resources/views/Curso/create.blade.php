@extends('layouts.padrao');

@section('conteudo')
<h1>Curso</h1>   

{{-- {{ Form::open([ 'method'  => 'POST', 'route' => [ 'curso.store' ], 'enctype' => 'multipart/form-data' ]) }} --}}
<form action="/curso" method="post" enctype="multipart/form-data" >
@csrf   
<div class="row">
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Nome', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'nome']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Duração:', '',) }}
           {{ Form::number('title', '', ['class' => 'form-control','name'=>'duracao']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           <label for="">Foto</label>
           <input type="file" clas="form-control" name="foto">
       </div>
   </div>

</div>
<br>
<!-- Submit -->
<div class="">
       {{Form::reset('reset', ['class'=>'btn btn-info'])}}
       {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
 </div>

{{ Form::close() }}

@endsection
