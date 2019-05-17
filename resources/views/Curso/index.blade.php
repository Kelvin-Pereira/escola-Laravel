@extends('layouts.app')

@section('conteudo')
<h1>Curso</h1>    

<div class="row">
    <div class="col-md-3">
        <a href="{{ route('curso.create')  }}" class="btn btn-warning">Novo</a><hr>  
        <div    class="col-md-4 offset-5 text-right mb-3">
            <input id="search" type="text" clas="form-control" placeholder="Digite o curso">
            <span style="color: red" id="mensagem"></span>

        </div>
    </div>
    <div class="col-md-12" id="listagem"></div>
   
</div>

<script>    
    $(function() {
            $('#search').keyup(function(){
                if(!$('#search').val() || $('#search').val().length >= 3){
                    $('#listagem').load('/curso/listar/' + $('#search').val());
                }else{
                    $('#mensagem').html('Digite ao menos 3 caracteres');
                }
            }).keyup();
    })
</script>
     

@endsection
