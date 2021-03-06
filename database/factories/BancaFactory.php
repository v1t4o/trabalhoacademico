<?php

namespace Database\Factories;

use App\Models\Banca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Uspdev\Replicado\Pessoa;

class BancaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banca::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $docente = $this->faker->docente();
        return [
            'n_usp' => $docente,
            'prof_externo_id' => null,
            'presidente' => 'Não',
        ];
    }
}
