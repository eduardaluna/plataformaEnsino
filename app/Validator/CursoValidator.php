<?php

namespace App\Validator;

use App\Models\Curso;

class CursoValidator{
    public static function validar($curso){
        $validator = \Validator::make($curso, Curso::$rules, Curso::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, "Erro na validação do Curso");
        }
        return $validator;
    }
}
