<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model{
    use HasFactory;

    protected $fillable = [
        'nome','email', 'sexo', 'data_nascimento', 'turma_id'
    ];

    public static $rules = [
        'nome' => 'required',
        'email' => 'required|email|unique:App\Models\Aluno,email',
        'sexo' => 'nullable',
        'data_nascimento' => 'required|date',
        'turma_id' => 'nullable'
    ];

    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório',
        'data_nascimento.*' => 'O campo data de nascimento é obrigatório',
        'email.*'  => 'O campo email é obrigatório e não pode ser um email já cadastrado'
    ];
}
