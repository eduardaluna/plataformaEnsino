<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container-fluid p-0 justify-content-center">
            <header class="row">
                @include('includes.header')
            </header>
        </div>
        <br>
        <div class="container justify-content-center">
            <div class="card justify-content-center">
                <br>
                <div class="row justify-content-center">
                    <h3>Bem Vindo!</h3>
                </div>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col" align="center">
                            <a href="{{ url('listar/alunos') }}" class="btn btn1 btn-secondary pull-right">Alunos</a><br><br>
                            <a href="{{ url('criar/aluno') }}" class="btn btn1 btn-secondary pull-right">Criar Aluno</a><br><br>
                            <a href="{{ url('listar/cursos') }}" class="btn btn1 btn-secondary pull-right">Cursos</a><br><br>
                            <a href="{{ url('criar/curso') }}" class="btn btn1 btn-secondary pull-right">Criar Curso</a><br><br>
                        </div>

                        <div class="col">
                            <a href="{{ url('listar/matriculas') }}" class="btn btn1 btn-secondary pull-right">Matrículas</a><br><br>
                            <a href="{{ url('criar/matricula') }}" class="btn btn1 btn-secondary pull-right">Criar Matrícula</a><br><br>
                        <!--
                            <a href="{{ url('requisicao') }}" class="btn btn1 btn-secondary pull-right">Alunos Por Faixa Etária</a><br><br>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
