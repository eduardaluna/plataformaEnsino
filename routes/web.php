<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;

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

Route::get('/editar/curso/{id}', [CursoController::class, 'editar']);

Route::post('/atualizar/curso/{id}', [CursoController::class, 'atualizar']);

Route::get('/remover/curso/{id}', [CursoController::class, 'remover']);

Route::get('/listar/matriculas', [MatriculaController::class, 'listar']);

Route::get('/criar/matricula', [MatriculaController::class, 'criar']);

Route::post('/salvar/matricula', [MatriculaController::class, 'salvar']);

Route::get('/visualizar/matricula/{id}', [MatriculaController::class, 'visualizar']);

Route::get('/adicionar/curso/{id}', [MatriculaController::class, 'adicionarCurso']);

Route::post('/adicionar/curso/{idc}/{idm}', [MatriculaController::class, 'adicionar']);

Route::get('/buscar', [AlunoController::class, 'buscar']);

Route::get('/', function () {
    return view('welcome');
});
