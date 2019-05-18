@extends('layouts.app');

@section('conteudo')
<h1>Professor</h1>   

{{-- {{ Form::open([ 'method'  => 'POST', 'route' => [ 'profesor.store' ] ]) }} --}}
<form action="/profesor" method="post" enctype="multipart/form-data" >
@csrf   
<div class="row">
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Nome', '',) }}
           {{-- {{ Form::text('title', '', ['class' => 'form-control','name'=>'nome']) }} --}}
           <input type="text" class="form-control" name="nome" id="nome">
           <span id="mensagem-nome" style="color: red;"></span>
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Matrícula', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'matricula']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('CPF', '',) }}
           {{-- {{ Form::text('title', '', ['class' => 'form-control','name'=>'cpf']) }} --}}
           <input type="text" class="form-control" name="cpf" id="cpf">
           <span id="mensagem-cpf" style="color: red;"></span>
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Telefone', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'telefone']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('E-mail', '',) }}
           {{ Form::email('title', '', ['class' => 'form-control','name'=>'email']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('CEP', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'complemento','id'=>'cep']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Logradouro', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'logradoro','id' =>'logradoro']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Complemento', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'complemento','id'=>'complemento']) }}
       </div>
   </div>
   <div class="col-2">
       <div class="form-group bmd-form-group">
           {{ Form::label('Bairro', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'bairro','id'=>'bairro']) }}
       </div>
   </div>
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('UF', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'uf','id'=>'uf']) }}
       </div>
   </div>
   <div class="col-3">
       <div class="form-group bmd-form-group">
           {{ Form::label('Municipio', '',) }}
           {{ Form::text('title', '', ['class' => 'form-control','name'=>'municipio','id'=>'municipio']) }}
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
<div class="text-right">
       {{Form::reset('reset', ['class'=>'btn '])}}
       {{Form::submit('Submit', ['class'=>'btn btn-success'])}}
 </div>

{{ Form::close() }}


<script>
$(function(){
    $('#nome').change(function(){
        $.ajax({
            url: '/verificar-nome/' + $('#nome').val(),
            success: function (dados){
                if(dados.mensagem){
                    $('#mensagem-nome').html(dados.mensagem);
                    // $('#nome').val('')
                }
            }

        });
    });
    $('#cpf').change(function(){
        $.ajax({
            url: '/verificar-cpf/' + $('#cpf').val(),
            success: function (dados){
                if(dados.existe){
                    $('#mensagem-cpf').html(dados.mensagem);
                    // $('#nome').val('')
                }
            }

        });
    });
    $('#cep').change(function(){
        $.ajax({
            url: 'http://viacep.com.br/ws/'+$('#cep').val()+'/json',
            success: function (dados){
                    $('#logradoro').val(dados.logradouro);
                    $('#complemento').val(dados.complemento);
                    $('#bairro').val(dados.bairro);
                    $('#uf').val(dados.uf);
                    $('#municipio').val(dados.municipio);
                    
                
            }

        });
    });
}); 
</script>

@endsection
