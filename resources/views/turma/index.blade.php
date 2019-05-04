@extends('layouts.app')

@section('conteudo')
<h1>Turma</h1>    

    <a href="{{ route('turma.create')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>disciplina</th>
           <th>Professor</th>
           <th>Açoes</th>
       </tr>
       @foreach ($turmas as $turma)
           <tr>
           <td>{{$turma->id}}</td>

           <td>{{$turma->disciplina->nome}}</td>
           <td>{{$turma->profesosr->nome}}</td>
           <td>
  

            {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'turma.destroy', $turma->id ] ]) }}
            <a href="turma/{{ $turma->id }}/edit " class="btn btn-warning ">Editar</a>
            @csrf   
            {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
            
            {{ Form::close() }}

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
