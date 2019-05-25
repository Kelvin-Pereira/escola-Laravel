@extends('layouts.padrao')
@section('conteudo')
<br>
<div class="main main-raised">
    <h1 class="text-center">Cadastro de Alunos</h1><hr>
    <div class="container">

        {{ Form::open(['method'=>'PUT', 'route'=>['aluno.update', $alunos->id ] ]) }}
         @csrf   
         <div class="row">
            <div class="col-3">
                <div class="form-group bmd-form-group">
                    {{ Form::label('Nome', '',) }}
                    {{ Form::text('title', $alunos->nome, ['class' => 'form-control','name'=>'nome']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('telefone', '',) }}
                    {{ Form::text('title', $alunos->telefone, ['class' => 'form-control','name'=>'telefone']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('email', '',) }}
                    {{ Form::text('title', $alunos->email, ['class' => 'form-control','name'=>'email']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('cep', '',) }}
                    {{ Form::text('title', $alunos->cep, ['class' => 'form-control','name'=>'cep']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('logradoro', '',) }}
                    {{ Form::text('title', $alunos->logradoro, ['class' => 'form-control','name'=>'logradoro']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('complemento', '',) }}
                    {{ Form::text('title', $alunos->complemento, ['class' => 'form-control','name'=>'complemento']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('bairro', '',) }}
                    {{ Form::text('title', $alunos->bairro, ['class' => 'form-control','name'=>'bairro']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('uf', '',) }}
                    {{ Form::text('title', $alunos->uf, ['class' => 'form-control','name'=>'uf']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('municipio', '',) }}
                    {{ Form::text('title', $alunos->municipio, ['class' => 'form-control','name'=>'municipio']) }}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group bmd-form-group">
                    {{ Form::label('data_nascimento', '',) }}
                    {{ Form::date('title', $alunos->data_nascimento, ['class' => 'form-control','name'=>'data_nascimento']) }}
                </div>
            </div>
         </div>
         <div class="form-group">
            <label for="">Foto</label>
        <img  width="100%" src="/storage/alunos/{{$alunos->foto}}" alt="{{$alunos->nome}}">
        <input type="file" class="form-group" name="foto">
     
        </div>
         <br>
         <!-- Submit -->
         <div class="text-right">
                {{Form::reset('reset', ['class'=>'btn '])}}
                {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
          </div>
        
         {{ Form::close() }}
       
    </div>
</div>
    
@endsection