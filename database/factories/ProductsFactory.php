<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'price'=>mt_rand(100,1000)/100,
            'weight'=>mt_rand(1,4)/1.8,
            'quantity'=>$this->faker->boolean(),
            'active' => $this->faker->boolean(),
            'image'=>strval(mt_rand(1,5).'.jpg'),
            'description' =>$this->faker->paragraph(),

        ];
    }
}
