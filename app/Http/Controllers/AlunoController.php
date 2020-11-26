<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Validator\AlunoValidator;
use App\Validator\ValidationException;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;

class AlunoController extends Controller{
    public function listar(){
        $lista = Aluno::orderBy('nome','asc')->paginate(10)->setPath('alunos');
        return view('alunos.listar',compact(['lista']));
    }

    public function criar(){
        return view('alunos.criar');
    }

    public function salvar(Request $request){
        try{
            AlunoValidator::validar($request->all());
            Aluno::create($request->all());
            return redirect('listar/alunos');
        }
        catch(ValidationException $exception){
            return redirect('/criar/aluno')->withErrors($exception->getValidator())->withInput();
        }
    }

    public function visualizar($id){
        $aluno =  Aluno::find($id);
        return view('alunos.visualizar',compact(['aluno']));
    }

    public function editar($id){
        $aluno = Aluno::find($id);
        return view('alunos.editar',compact(['aluno']));
    }

    public function atualizar(Request $request, $id){
        $aluno = Aluno::find($id);
        try{
            AlunoValidator::validar($request->all());
            $aluno->update($request->all());
            return redirect('listar/alunos');
        }
        catch(ValidationException $exception){
            return redirect('/editar/aluno/'.$id)->withErrors($exception->getValidator())->withInput();
        }
    }

    public function remover($id){
        Aluno::where('id',$id)->delete();
        return redirect()->back()->with('sucesso','Aluno Removido');
    }

    public function buscar(Request $request){
        $busca = $request->get('busca');
        $lista = Aluno::query()
            ->where('nome', 'ilike', "%{$busca}%")
            ->orWhere('email', 'ilike', "%{$busca}%")
            ->orderBy('nome', 'asc')
            ->get();
        return view('alunos.listar',compact(['lista']));
    }
}
