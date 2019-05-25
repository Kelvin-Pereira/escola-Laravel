@extends('layouts.padrao')

@section('conteudo')
<h1>Profesor</h1>    
    <a href="{{ route('profesor.create')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>id</th>
            <th>Nome</th>
            {{-- <th>Disciplina</th> --}}
            <th>Açoes</th>
        </tr>
        @foreach ($professores as $professor)
            <tr>
                <td>{{$professor->id}}</td>
                <td>{{$professor->nome}}</td>
            {{-- array --}}
            {{-- <td>{{$curso->disciplinas[0]->nome}}</td>  --}}
             <td>
 
                    {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'profesor.destroy', $professor->id  ] ]) }}
                    <a href="profesor/{{ $professor->id}}/edit " class="btn btn-warning ">Editar</a>
                    @csrf   
                    {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
                    
                    {{ Form::close() }}
 
             </td>
         </tr>
         @endforeach
    </table>

@endsection
