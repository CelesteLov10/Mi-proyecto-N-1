<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedore;

class ProveedoresFactory extends Factory
{
    protected $model = Proveedore::class;
    /**
     * Define the model's default state.
     *
     * @return array
     *     
     */
    public function definition()
    {
        return [
          'nombre'=> $this->faker->name,
          'apellido'=> $this->faker->lastname,
          'telefono'=>$this->faker->numerify('####-####'),
          'direccion'=>$this->faker->address(),
          'No identidad'=>$this->faker->numerify('####-')
          .$faker->numberBetween(1950,2005)
          .$faker->unique()->numerify('-#####')
        ];
    }
}
