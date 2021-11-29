<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nome' =>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'motivo_contato' => $this-> faker ->randomNumber(1, 2),
            'mensagem'=> $this -> faker -> text(200),          
        ];
    }
}
