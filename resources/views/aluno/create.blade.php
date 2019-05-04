@extends('layouts.app')
@section('conteudo')
<br>
<div class="main main-raised">
    <h1 class="text-center">Cadastro de Eventos</h1><hr>
    <div class="container">

         {{ Form::open([ 'method'  => 'POST', 'route' => [ 'aluno.store' ] ]) }}
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
                    {{ Form::label('telefone', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'telefone']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('email', '',) }}
                    {{-- {{ Form::text('email', '', ['class' => 'form-control','name'=>'email','id'=>'email']) }} --}}
                    <input type="text" class="form-control" name="email" id="email">
                    <span id="mensagem-email" style="color: red;"></span>
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('cep', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'cep']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('logradoro', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'logradoro']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('complemento', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'complemento']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('bairro', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'bairro']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('uf', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'uf']) }}
                </div>
            </div>
            <div class="col-2">
                <div class="form-group bmd-form-group">
                    {{ Form::label('municipio', '',) }}
                    {{ Form::text('title', '', ['class' => 'form-control','name'=>'municipio']) }}
                </div>
            </div>
            <div class="col-3">
                <div class="form-group bmd-form-group">
                    {{ Form::label('data_nascimento', '',) }}
                    {{ Form::date('title', '', ['class' => 'form-control','name'=>'data_nascimento']) }}
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

<script>
$(function(){
    $('#email').change(function(){
        $.ajax({
            url: '/verificar-email/' + $('#email').val(),
            success: function (dados){
                if(dados.existe){
                    $('#mensagem-email').html(dados.mensagem);
                    $('#email').val('')
                }
            }

        });
    });
}); 
    

</script>
    
@endsection