<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory{

    protected $model = Curso::class;

    public function definition()
    {
        // TODO: Implement definition() method.
        return [
            'titulo' => $this->faker->lexify('??????????')
        ];
    }
}
