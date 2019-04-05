@extends('layouts.app')
@section('conteudo')
<br>
<div class="main main-raised">
    <h1 class="text-center">Cadastro de Eventos</h1><hr>
    <div class="container">
{{-- 
        @if ($erros->any())
            <ul class="alert alert-warning">
                @foreach ($erros->all() as $erro)
            <li>{{ $erro }}</li>
                @endforeach
            </ul>
        @endif --}}

         {{-- laravel collective form --}}
         {{ Form::open([ 'method'  => 'POST', 'route' => [ 'eventos.store' ] ]) }}
         @csrf   
         <div class="row">
            <div class="col-3">
                <div class="form-group bmd-form-group">
                        {{ Form::label('Data:', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'data']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('Horario', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'horas']) }}
                </div>
            </div>
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