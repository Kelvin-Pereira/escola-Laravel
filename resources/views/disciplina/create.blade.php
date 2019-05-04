@extends('layouts.app');

@section('conteudo')
<h1>Disciplina</h1>   

{{ Form::open([ 'method'  => 'POST', 'route' => [ 'disciplina.create' ] ]) }}
@csrf   
<div class="row">
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Nome', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'nome']) }}
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
