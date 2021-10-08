<?php


namespace App\Http\Controllers;

use App\Interfaces\ClientInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClientsDetails()
    {
        $result = $this->client->getClientsDetails();

        return response()->json($result);
        $data['clients'] = $result;

        return view('client.getDetails', $data);
    }
}