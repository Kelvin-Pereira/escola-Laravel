@extends('layouts.padrao');

@section('conteudo')
<h1>Professor</h1>   

{{ Form::open([ 'method'  => 'PUT', 'route' => [ 'profesor.update', $professor->id  ] ]) }}
@csrf   
<div class="row">
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Nome', '',) }}
           {{ Form::text('title', $professor->nome, ['class' => 'form-control','name'=>'nome']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Matrícula', '',) }}
           {{ Form::text('title', $professor->matricula, ['class' => 'form-control','name'=>'matricula']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('CPF', '',) }}
           {{ Form::text('title', $professor->cpf, ['class' => 'form-control','name'=>'cpf']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Telefone', '',) }}
           {{ Form::text('title', $professor->telefone, ['class' => 'form-control','name'=>'telefone']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('E-mail', '',) }}
           {{ Form::email('title', $professor->email, ['class' => 'form-control','name'=>'email']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('CEP', '',) }}
           {{ Form::text('title', $professor->nome, ['class' => 'form-control','name'=>'complemento']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Logradouro', '',) }}
           {{ Form::text('title', $professor->complemento, ['class' => 'form-control','name'=>'logradoro']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Complemento', '',) }}
           {{ Form::text('title', $professor->complemento, ['class' => 'form-control','name'=>'complemento']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Bairro', '',) }}
           {{ Form::text('title', $professor->bairro, ['class' => 'form-control','name'=>'bairro']) }}
       </div>
   </div>
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('UF', '',) }}
           {{ Form::text('title', $professor->uf, ['class' => 'form-control','name'=>'uf']) }}
       </div>
   </div>
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Municipio', '',) }}
           {{ Form::text('title', $professor->municipio, ['class' => 'form-control','name'=>'municipio']) }}
       </div>
   </div>

   <div class="form-group">
    <label for="">Foto</label>
<img  width="100%" src="/storage/professor/{{$professor->foto}}" alt="{{$professor->nome}}">
<input type="file" class="form-group" name="foto">

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
