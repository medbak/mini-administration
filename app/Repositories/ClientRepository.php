<?php

namespace App\Repositories;

use App\Interfaces\ClientInterface;
use App\Models\Client;

class ClientRepository implements ClientInterface
{

    public function getClientsDetails()
    {
        $data = Client::select('prenom', 'nom', 'email', 'telephone')
         ->withCount('commandes')
         ->get();

        return $data;
    }
}