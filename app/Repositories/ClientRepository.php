<?php

namespace App\Repositories;

use App\Interfaces\ClientInterface;
use App\Models\Client;

class ClientRepository implements ClientInterface
{

    public function getClientsDetails()
    {
        $data = Client::all();

        return $data;
    }
}