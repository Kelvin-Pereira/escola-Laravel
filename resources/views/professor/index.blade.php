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
            

            {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'professor.destroy', $curso->id ] ]) }}
            <a href="professor/{{ $curso->id }}/edit " class="btn btn-warning ">Editar</a>
            @csrf   
            {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
            
            {{ Form::close() }}

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
