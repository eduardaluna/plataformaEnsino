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
            <form method="POST" action="{{url('/salvar/curso')}}">
                @csrf
                <div class="card justify-content-center">
                    <br>
                    <div class="row justify-content-center">
                        <h3>Criar Curso</h3>
                    </div>
                    <div class="container pt-3 justify-content-left">
                        <div class="row">
                            <div class="col">
                                <label for="titulo" class="required">Título</label>
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{old('titulo')}}" required autofocus/>
                                @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="descricao">Descrição</label>
                                <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{old('descricao')}}" autofocus/>
                                @error('descricao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <button class="btn btn btn-secondary pull-right" title="salvar" type="submit">Cadastrar</button>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </body>
</html>
