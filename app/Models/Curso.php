<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descricao'
    ];

    public static $rules = [
        'titulo' => 'required',
        'descricao' => 'nullable'
    ];

    public static $messages = [
        'titulo.*' => 'O campo título é obrigatório'
    ];
}
