<?php

namespace App\Validator;

use App\Models\Aluno;

class AlunoValidator{
    public static function validar($aluno){
        $validator = \Validator::make($aluno, Aluno::$rules, Aluno::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Aluno");
        }
        return $validator;
    }
}
