<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model{
    use HasFactory;

    protected $fillable = ['aluno_id','curso_id'];

    public static $rules = [
        'aluno_id' => 'required',
        'curso_id' => 'nullable'
    ];

    public static $messages = [
        'aluno_id.*' => 'É obrigatório escolher um aluno para realizar a matrícula'
    ];

    public function cursos(){
        return $this->hasMany('App\Models\Curso');
    }

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno');
    }
}
