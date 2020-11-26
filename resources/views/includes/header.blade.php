<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Plataforma de Ensino</a>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Início
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listar/alunos') }}">Lista de Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listar/cursos') }}">Lista de Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/listar/matriculas') }}">Lista de Matrículas</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{url('/buscar')}}" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar Aluno.." name="busca">
                    <button class="btn btn-secondary my-2 my-sm-0" title="buscar" type="submit">Buscar</button>
                </div>
            </form>
        </div>
    </nav>
</div>
