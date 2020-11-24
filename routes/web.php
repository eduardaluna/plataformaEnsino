<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/listar/alunos', [AlunoController::class, 'listar']);

Route::get('/criar/aluno', [AlunoController::class, 'criar']);

Route::post('/salvar/aluno', [AlunoController::class, 'salvar']);

Route::get('/visualizar/aluno/{id}', [AlunoController::class, 'visualizar']);

Route::get('/editar/aluno/{id}', [AlunoController::class, 'editar']);

Route::post('/atualizar/aluno/{id}', [AlunoController::class, 'atualizar']);

Route::get('/remover/aluno/{id}', [AlunoController::class, 'remover']);

Route::get('/listar/cursos', [CursoController::class, 'listar']);

Route::get('/criar/curso', [CursoController::class, 'criar']);

Route::post('/salvar/curso', [CursoController::class, 'salvar']);

Route::get('/visualizar/curso/{id}', [CursoController::class, 'visualizar']);

Route::get('/', function () {
    return view('welcome');
});
