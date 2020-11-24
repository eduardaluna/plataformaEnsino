<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Validator\CursoValidator;
use App\Validator\ValidationException;
use Illuminate\Http\Request;

class CursoController extends Controller{
    public function listar(){
        $lista = Curso::orderBy('titulo','asc')->paginate(10)->setPath('cursos');
        return view('cursos.listar',compact(['lista']));
    }

    public function criar(){
        return view('cursos.criar');
    }

    public function salvar(Request $request){
        try{
            CursoValidator::validar($request->all());
            Curso::create($request->all());
            return ("inscricao Concluida");
        }
        catch(ValidationException $exception){
            return redirect('/criar/curso')->withErrors($exception->getValidator())->withInput();
        }
    }

    public function visualizar($id){
        $curso =  Curso::find($id);
        return view('cursos.visualizar',compact(['curso']));
    }
}
