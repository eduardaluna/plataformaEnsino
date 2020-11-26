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
                    <h3>Visualizar Matrícula</h3>
                </div>
                <div class="container pt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Id da Matrícula</th>
                                    <th>Id do Aluno</th>
                                    <th>Nome do Aluno</th>
                                    <th>Curso Matriculado</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$matricula->id}}</td>
                                    <td>{{$aluno->id}}</td>
                                    <td>{{$aluno->nome}}</td>
                                    <td>{{$curso->titulo}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
