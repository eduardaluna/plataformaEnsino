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
                    <h3>Criar Matrícula</h3>
                </div>
                <div class="container pt-3 justify-content-left">
                    <div class="card justify-content-center">
                        <br>
                        <h4 align="center">Alunos não Matriculados</h4>
                        <div class="container pt-3">
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-borderless justify-content-center">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($alunos as $aluno)
                                            <form method="POST" action="{{url('/salvar/matricula')}}">
                                                @csrf
                                                <tr>
                                                    <td>{{$aluno->nome}}</td>
                                                    <td>{{$aluno->email}}</td>
                                                    <td><a href="{{url('/visualizar/aluno/'.$aluno->id)}}" class="btn btn btn-secondary pull-right">Visualizar</a></td>
                                                    <input id="aluno_id" type="hidden" class="form-control" name="aluno_id" value="{{$aluno->id}}"/>
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
