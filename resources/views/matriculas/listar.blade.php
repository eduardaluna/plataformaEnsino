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
                    <h3>Lista de Matrículas</h3>
                </div>
                <div class="container pt-3">
                    <div class="table-responsive">
                        <table class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Id da Matrícula</th>
                                    <th>Id do Aluno</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($lista as $matricula)
                                <tr>
                                    <td>{{$matricula->id}}</td>
                                    <td>{{$matricula->aluno_id}}</td>
                                    <td><a href="{{url('/visualizar/matricula/'.$matricula->id)}}" class="btn btn btn-secondary pull-right">Visualizar</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
