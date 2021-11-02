<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

class ProductosFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'nombre del producto'=>$this->faker->word(),
            'precio unitario'=>$this->faker->numberBetween(200-1000),
            'categoria'=>$this->faker->word()
            //
        ];
    }
}
