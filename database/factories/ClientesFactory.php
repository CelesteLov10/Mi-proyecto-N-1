<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\cliente;

class ClientesFactory extends Factory
{
    protected $model = cliente::class;
    /**
     * Define the model's default state.
     *    
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstname,
            'apellido'=>$this->faker->lastname,
            'telefono'=>$this->faker->numerify('####-####'),
            'fecha de pedido'=>$this->faker->dateTimeBetween('1 day','5 years')
            //
        ];
    }
}
