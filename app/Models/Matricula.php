<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model{
    use HasFactory;

    public function cursos(){
        return $this->hasMany('App\Models\Curso');
    }

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno');
    }
}
