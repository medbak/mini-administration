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
            'articles' => $this->faker->bothify($this->generateArticle()),
            'montant' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }

    function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateText()
    {
        return random_int(1,9).' x Produit '.random_int(1,9).' (Ref: '.$this->generateRandomString(5).')' ;
    }

    function generateArticle()
    {
        $r = random_int(1,9);
        $articles = '';

        for ($i =0; $i < $r; $i++)
        {
            $articles .= $this->generateText().'<br>';
        }

        return $articles;
    }

}
