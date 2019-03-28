@extends('layouts.app');

@section('conteudo')
<h1>Profesor</h1>    

    <a href="{{ route('profesor.store')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Açoes</th>
       </tr>
       @foreach ($professores as $professor)
           <tr>
           <td>{{$professor->id}}</td>
           <td>{{$professor->nome}}</td>
            <td>
            <a href="professor/{{$professor->id}}" class="btn btn-warning">Editar</a>
            <a href="professor{{$professor->id}}"  class="btn btn-danger">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
