@extends('layouts.app');

@section('conteudo')
<h1>Turma</h1>    

    <a href="{{ route('turma.store')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Açoes</th>
       </tr>
       @foreach ($turmas as $turma)
           <tr>
           <td>{{$turma->id}}</td>
           <td>{{$turma->nome}}</td>
            <td>
            <a href="turma/{{$turma->id}}" class="btn btn-warning">Editar</a>
            <a href="turma{{$turma->id}}"  class="btn btn-danger">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
