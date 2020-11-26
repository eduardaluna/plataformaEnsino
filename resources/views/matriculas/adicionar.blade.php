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
                    <h3>Adicionar Cursos</h3>
                </div>
                <div class="container pt-3 justify-content-left">
                    <div class="card justify-content-center">
                        <br>
                        <h4 align="center">Cursos não Matriculados por esse Aluno</h4>
                        <div class="container pt-3">
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-borderless justify-content-center">
                                        <thead>
                                            <tr>
                                                <th>Título</th>
                                                <th>Descrição</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cursos as $curso)
                                            <form method="POST" action="{{url('/adicionar/curso/'.$curso->id.'/'.$matricula->id)}}">
                                                @csrf
                                                <tr>
                                                    <td>{{$curso->titulo}}</td>
                                                    <td>{{$curso->descricao}}</td>
                                                    <td><button class="btn btn btn-secondary pull-right" title="matricular" type="submit">Matricular</button></td>
                                                </tr>
                                            </form>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
