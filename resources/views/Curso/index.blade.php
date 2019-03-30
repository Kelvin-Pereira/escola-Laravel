@extends('layouts.app');

@section('conteudo')
{{-- <div class=" row contet-justifil-center"> --}}
{{-- <div class="col-8"></div>
</div> --}}
<h1>Curso</h1>    

    <a href="{{ route('curso.create')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Disciplina</th>
           <th>Açoes</th>
       </tr>
       @foreach ($cursos as $curso)
           <tr>
           <td>{{$curso->id}}</td>
           <td>{{$curso->nome}}</td>
           <td>{{$curso->diciplinas}}</td>
            <td>
            <a href="curso/{{$curso->id}}/edit" class="btn btn-warning btn-sl">Editar</a>
            <a href="curso{{$curso->id}}/destry"  class="btn btn-danger btn-sl ">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
