<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => explode(' ', $this->faker->name())[1],
            'descricao' => $this->faker->text(),
            'quantidade_estoque' => rand(10,1000),
            'preco' => rand(0, 1000),
    
        ];
    }
}
