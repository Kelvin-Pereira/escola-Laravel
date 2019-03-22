@section('carro')
<h2>{{$nome}}</h2>

<ul>
@foreach ($aCarro as $carro)
<li>{{$carro}}</li>
@endforeach
</ul>
<p>Nota: {{$nota}}</p>
@endsection
