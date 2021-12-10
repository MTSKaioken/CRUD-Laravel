<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo_produto'=>$this->faker->word(),
            'preco'=>$this->faker->randomFloat(2, 1.0, 52.75),
            'descricao'=>$this->faker->sentence(), 
            'categoria'=> $this->faker->word(),      
            'url_img_produto'=> $this->faker->imageUrl(640, 480, 'products'),              
        ];
    }
}
