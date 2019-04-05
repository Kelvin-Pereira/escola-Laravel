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
        

            {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'aluno.destroy', $curso->id ] ]) }}
            <a href="aluno/{{ $curso->id }}/edit " class="btn btn-warning ">Editar</a>
            @csrf   
            {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
            
            {{ Form::close() }}


        </td>
        </tr>
        @endforeach
   </table>
   

@endsection