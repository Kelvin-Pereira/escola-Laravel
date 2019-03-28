@extends('layouts.app');

@section('conteudo')
<h1>Curso</h1>    

    <a href="{{ route('curso.store')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Açoes</th>
       </tr>
       @foreach ($cursos as $curso)
           <tr>
           <td>{{$curso->id}}</td>
           <td>{{$curso->nome}}</td>
            <td>
            <a href="curso/{{$curso->id}}" class="btn btn-warning">Editar</a>
            <a href="curso{{$curso->id}}"  class="btn btn-danger">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
