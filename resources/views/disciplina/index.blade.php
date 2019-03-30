@extends('layouts.app');

@section('conteudo')
<h1>Diciplinas</h1>    

    <a href="{{ route('disciplina.store')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Curso</th>
           <th>Açoes</th>
       </tr>
       @foreach ($disciplinas as $disciplina)
           <tr>
           <td>{{$disciplina->id}}</td>
           <td>{{$disciplina->nome}}</td>
           <td>{{$disciplina->cursos->nome}}</td>
            <td>
            <a href="dicliplina/{{$disciplina->id}}" class="btn btn-warning btn-sl">Editar</a>
            <a href="dicliplina{{$disciplina->id}}"  class="btn btn-danger btn-sl">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
