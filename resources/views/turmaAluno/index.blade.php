@extends('layouts.padrao')

@section('conteudo')
<h1>Turma</h1>    

    <a href="{{ route('turma-aluno.create')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Açoes</th>
       </tr>
       @foreach ($turmas as $turma)
          
        <td>{{$turma->id}}</td>
        <td>{{$turma->semestre}}</td>
        <td>

            {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'turma.destroy', $turma->id ] ]) }}
            <a href="turma-aluno/{{ $turma->id }}/edit " class="btn btn-warning ">Editar</a>
            @csrf   
            {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
            
            {{ Form::close() }}

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
