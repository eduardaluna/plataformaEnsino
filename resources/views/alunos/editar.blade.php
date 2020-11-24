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
            <form method="POST" action="{{url('/atualizar/aluno/'.$aluno->id)}}">
                @csrf
                <div class="card justify-content-center">
                    <br>
                    <div class="row justify-content-center">
                        <h3>Editar Aluno</h3>
                    </div>
                    <div class="container pt-3 justify-content-left">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="required">Nome Completo</label>
                                <input id="nome" type="text" value="{{$aluno->nome}}" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus/>
                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="email" class="required">E-mail</label>
                                <input id="email" type="email" value="{{$aluno->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="data_nascimento" class="required">Data de Nascimento</label>
                                <input id="data_nascimento" type="date" value="{{$aluno->data_nascimento}}" class="form-control" name="data_nascimento" required autofocus/>
                            </div>
                            <div class="col">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="Não Informado">Não Informado</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <button class="btn btn btn-secondary pull-right" title="salvar" type="submit">Editar</button>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </body>
</html>
