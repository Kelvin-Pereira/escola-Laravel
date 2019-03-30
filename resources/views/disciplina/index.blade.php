@extends('layouts.app');

@section('conteudo')
<h1>Diciplinas</h1>    

    <a href="{{ route('dicliplina.store')  }}" class="btn btn-warning">Novo</a><hr>    
   <table class="table table-hover table-bordered table-striped">
       <tr>
           <th>id</th>
           <th>Nome</th>
           <th>Curso</th>
           <th>Açoes</th>
       </tr>
       @foreach ($diciplinas as $diciplina)
           <tr>
           <td>{{$diciplina->id}}</td>
           <td>{{$diciplina->nome}}</td>
           <td>{{$diciplina->curso}}</td>
            <td>
            <a href="dicliplina/{{$diciplina->id}}" class="btn btn-warning btn-sl">Editar</a>
            <a href="dicliplina{{$diciplina->id}}"  class="btn btn-danger btn-sl">Deletar</a>

        </td>
        </tr>
        @endforeach
   </table>
   

@endsection
