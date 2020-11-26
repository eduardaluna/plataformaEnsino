<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Curso;
use App\Validator\ValidationException;
use App\Validator\CursoValidator;

class CursoValidatorTest extends TestCase{
    public function testCursoSemTitulo(){
        $this->expectException(ValidationException::class);
        $curso = Curso::factory()->make(['titulo'=>'']);
        $curso = $curso->toArray();
        CursoValidator::validar($curso);
    }

    public function testCursoCorreto(){
        $curso = Curso::factory()->make();
        $curso = $curso->toArray();
        CursoValidator::validar($curso);
        $this->assertTrue(true);
    }
}
