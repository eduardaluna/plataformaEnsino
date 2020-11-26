<?php

namespace App\Validator;

use App\Models\Matricula;

class MatriculaValidator{
    public static function validar($data){
        $validator = \Validator::make($data, Matricula::$rules, Matricula::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação da matricula");
        }
        return $validator;
    }
}
