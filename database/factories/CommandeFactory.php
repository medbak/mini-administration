<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_commande' => $this->faker->date,
            'numero' => $this->faker->unique()->numerify('#####'),
            'articles' => $this->faker->text,
            'montant' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
