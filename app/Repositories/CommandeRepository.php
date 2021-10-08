<?php

namespace App\Repositories;

use App\Interfaces\CommandeInterface;
use App\Models\Commande;

class CommandeRepository implements CommandeInterface
{

    public function getCommandeDetails()
    {
        $data = Commande::all();

        return $data;
    }
}