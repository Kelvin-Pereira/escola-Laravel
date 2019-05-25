@extends('layouts.padrao')

@section('conteudo')
<h1>Aluno</h1>    

    <a href="{{ route('aluno.create')  }}" class="btn btn-warning">Novo</a><hr>    
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
        

            {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'aluno.destroy', $aluno->id ] ]) }}
            <a href="aluno/{{ $aluno->id }}/edit " class="btn btn-warning ">Editar</a>
            @csrf   
            {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
            
            {{ Form::close() }}


        </td>
        </tr>
        @endforeach
   </table>
   <br>
@endsection

