@extends('layouts.app')
@section('conteudo')
<br>
<div class="main main-raised">
    <h1 class="text-center">Cadastro de alunos</h1><hr>
    <div class="container">

         {{-- {{ Form::open([ 'method'  => 'POST', 'route' => [ 'aluno.store' ] ]) }} --}}
         <form action="/aluno" method="post" enctype="multipart/form-data" >
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

            {{-- uf --}}
            <div class="form-group col-3">
                <label for="exampleFormControlSelect1">Uf</label>
                <select class="form-control" id="exampleFormControlSelect1" name="municipio" required>
                    <option value="">Selecione UF</option>
                        @foreach ($ufs as $uf)
                        <option value=" {{$uf->id}} "> {{$uf->sigla}} </option>
                        @endforeach
                </select>
              </div>

            {{-- municipio --}}
            <div class="form-group col-3">
                <label for="exampleFormControlSelect1">Municipio</label>
                <select class="form-control" id="exampleFormControlSelect1" name="municipio" required>
                        <option value="">Selecione municipio</option>
                    @foreach ($municipios as $municipio)
                        <option value=" {{$municipio->id}} "> {{$municipio->nome}} </option>
                        @endforeach
                </select>
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
         <div class="col-2">
            <div class="form-group bmd-form-group">
                <label for="">Foto</label>
                <input type="file" clas="form-control" name="foto">
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