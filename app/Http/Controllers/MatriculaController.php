<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use DB;
use App\Models\Matricula;
use App\Validator\MatriculaValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;

class MatriculaController extends Controller{
    public function listar(){
        $lista = DB::select("SELECT * FROM matriculas WHERE curso_id IS NOT NULL");
        return view('matriculas.listar',compact(['lista']));
    }

    public function criar(){
        $alunos = DB::select("SELECT * FROM alunos WHERE matricula_id IS NULL");
        return view('matriculas.criar', compact(['alunos']));
    }

    public function salvar(Request $request){
        try{
            MatriculaValidator::validar($request->all());
            $mat = Matricula::create($request->all());
            $aluno = Aluno::find($mat->aluno_id);
            $aluno->matricula_id = $mat->id;
            $aluno->update(['matricula_id']);
            return redirect('adicionar/curso/'.$mat->id);
        }
        catch(ValidationException $exception){
            return redirect('/criar/matricula')->withErrors($exception->getValidator())->withInput();
        }
    }

    public function visualizar($id){
        $matricula =  Matricula::find($id);
        $aluno = Aluno::find($matricula->aluno_id);
        $curso = Curso::find($matricula->curso_id);
        return view('matriculas.visualizar',compact(['matricula','aluno','curso']));
    }

    public function adicionarCurso($id){
        $matricula =  Matricula::find($id);
        if(!DB::table("SELECT curso_id FROM matriculas WHERE aluno_id = $matricula->aluno_id")){
            $cursos = DB::select("SELECT * FROM cursos WHERE id NOT IN (SELECT curso_id FROM matriculas WHERE aluno_id = $matricula->aluno_id)");
        }
        else{
            $cursos = DB::select("SELECT * FROM cursos");
        }
        return view('matriculas.adicionar', compact(['cursos','matricula']));
    }

    public function adicionar($idc, $idm){
        $matricula = Matricula::find($idm);
        $mat['curso_id'] = $idc;
        $mat['aluno_id'] = $matricula->aluno_id;
        Matricula::create($mat);
        return redirect('/adicionar/curso/'.$idm);
    }
}
