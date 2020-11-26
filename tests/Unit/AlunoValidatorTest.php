<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Aluno;
use App\Validator\ValidationException;
use App\Validator\AlunoValidator;

class AlunoValidatorTest extends TestCase{
    public function testAlunoSemNome(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['nome'=>'']);
        $aluno = $aluno->toArray();
        AlunoValidator::validar($aluno);
    }

    public function testAlunoSemEmail(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['email'=>'']);
        $aluno = $aluno->toArray();
        AlunoValidator::validar($aluno);
    }

    public function testAlunoSemDataNasc(){
        $this->expectException(ValidationException::class);
        $aluno = Aluno::factory()->make(['data_nascimento'=>'']);
        AlunoValidator::validar($aluno->toArray());
    }

    public function testAlunoCorreto(){
        $aluno = Aluno::factory()->make();
        $aluno = $aluno->toArray();
        AlunoValidator::validar($aluno);
        $this->assertTrue(true);
    }
}
