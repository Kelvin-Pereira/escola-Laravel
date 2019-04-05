@extends('layouts.app');

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
           {{-- <td>{{$curso->disciplinas->nome}}</td> --}}
            <td>
           

                <form action="curso/{{$curso->id}}" method="delete">
                     <a href="curso/{{$curso->id}}/edit" class="btn btn-warning btn-sl">Editar</a>
                     <a type="submit" class="btn btn-danger">Deletar</a>
                     <button tupe="submit">Enviar</button>
                </form>

            </td>
        </tr>
        @endforeach
   </table>
   

@endsection
