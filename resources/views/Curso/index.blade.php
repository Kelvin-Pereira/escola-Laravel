@extends('layouts.app')

@section('conteudo')
{{-- <div class=" row justify-content-center"> --}}
{{-- <a href="/show/{{ $Advogado->id }}" class="btn-sm btn-info ">Ver</a> --}}
{{-- <div class="col-8"></div>
</div> --}}
<h1>Curso</h1>    

    <a href="{{ route('curso.create')  }}" class="btn btn-warning">Novo</a><hr>    
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
           <td>{{$curso->disciplinas[0]->nome}}</td> 
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
   

@endsection
