<table class="table table-hover table-bordered table-striped">
        <tr>
            <th>id</th>
            <th>Nome</th>
            {{-- <th>Disciplina</th> --}}
            <th>Açoes</th>
        </tr>
        @foreach ($cursos as $curso)
            <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->nome}}</td>
            {{-- array --}}
            {{-- <td>{{$curso->disciplinas[0]->nome}}</td>  --}}
             <td>
 
                 {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'curso.destroy', $curso->id ] ]) }}
                 <a href="curso/{{ $curso->id }}/edit " class="btn btn-warning ">Editar</a>
                 @csrf   
                 {{ Form::submit('Excluir',['class' => 'btn btn-danger ']) }}
                 
                 {{ Form::close() }}
 
             </td>
         </tr>
         @endforeach
    </table>