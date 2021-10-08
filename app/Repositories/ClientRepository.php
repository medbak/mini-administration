<?php

namespace App\Repositories;

use App\Interfaces\ClientInterface;
use App\Models\Client;

class ClientRepository implements ClientInterface
{

    public function getClientsDetails()
    {
        $data = Client::withCount('commandes')->get();

        return $data;
    }
}