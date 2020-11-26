<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory{

    protected $model = Aluno::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'sexo' => $this->faker->randomElement(['Feminino', 'Masculino', 'Não Informado', 'Outro']),
            'data_nascimento' => ($this->faker->dateTimeBetween('-100 years', '-13 years')),
            'email' => $this->faker->unique()->safeEmail,
            'nome' => $this->faker->name()
        ];
    }
}
