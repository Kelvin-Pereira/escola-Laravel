<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Template Padrão</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-auto mr-lg-0" href="#">Web II</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('aluno.index')  }}">Alunos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('curso.index')  }}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profesor.index')  }}">Profesor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('turma.index')  }}">Turma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('turma-aluno.index')  }}">Turma Aluno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('disciplina.index')  }}">Diciplinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aluno.index')  }}">Diciplinas</a>
                </li>
            
                
            </ul>
            
        </div>
    </nav>

    {{-- hasSection caso exista ele mostra --}}
    @hasSection ('titulo')
        
        <div class="jumbotron">
            @yield('titulo')
        </div>
        
    @endif
   

    <main role="main" class="container" style="margin-top: 60px;">
        <div>
            @yield('conteudo')
        </div>

    </main>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</html>
