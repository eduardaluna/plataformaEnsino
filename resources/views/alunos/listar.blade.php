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
                    <h3>Lista de Alunos</h3>
                </div>
                <div class="container pt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Sexo</th>
                                    <th>Data de Nascimento</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($lista as $aluno)
                                <tr>
                                    <td>{{$aluno->nome }}</td>
                                    <td>{{$aluno->email }}</td>
                                    <td>{{$aluno->sexo }}</td>
                                    <td>{{Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y')}}</td>
                                    <td><a href="{{url('/visualizar/aluno/'.$aluno->id)}}" class="btn btn btn-secondary pull-right">Visualizar</a></td>
                                    <td><a href="{{url('/editar/aluno/'.$aluno->id)}}" class="btn btn btn-secondary pull-right">Editar</a></td>
                                    <td><a href="{{url('/remover/aluno/'.$aluno->id)}}" class="btn btn btn-secondary pull-right">Remover</a></td>
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
