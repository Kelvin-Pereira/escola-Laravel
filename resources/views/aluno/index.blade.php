@extends('layouts.app');

@section('conteudo')
<h1>Aluno</h1>    

    <a href="{{ route('aluno.store')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Açoes</th>
       </tr>
       @foreach ($alunos as $aluno)
           <tr>
           <td>{{$aluno->id}}</td>
           <td>{{$aluno->nome}}</td>
            <td>
            <a href="aluno/{{$aluno->id}}" class="btn btn-warning">Editar</a>
            <a href="aluno{{$aluno->id}}"  class="btn btn-danger">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection