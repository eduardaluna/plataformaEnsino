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
            return redirect('listar/cursos');
        }
        catch(ValidationException $exception){
            return redirect('/criar/curso')->withErrors($exception->getValidator())->withInput();
        }
    }

    public function visualizar($id){
        $curso =  Curso::find($id);
        return view('cursos.visualizar',compact(['curso']));
    }

    public function editar($id){
        $curso = Curso::find($id);
        return view('cursos.editar',compact(['curso']));
    }

    public function atualizar(Request $request, $id){
        $curso = Curso::find($id);

        try{
            CursoValidator::validar($request->all());
            $curso->update($request->all());
            return redirect('listar/cursos');
        }
        catch(ValidationException $exception){
            return redirect('/editar/curso/'.$id)->withErrors($exception->getValidator())->withInput();
        }
    }

    public function remover($id){
        Curso::where('id',$id)->delete();
        return redirect()->back()->with('sucesso','Curso Removido');
    }
}
