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
           <td>{{$disciplina->curso->nome}}</td>
            <td>

            {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'disciplina.destroy', $disciplina->id ] ]) }}
            <a href="disciplina/{{ $disciplina->id }}/edit " class="btn btn-warning ">Editar</a>
            @csrf   
            {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
            
            {{ Form::close() }}

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
