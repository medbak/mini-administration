<?php


namespace App\Http\Controllers;

use App\Exports\ClientsExport;
use App\Interfaces\ClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

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

        //return response()->json($result);
        $data['clients'] = $result;

        return view('client.listing', $data);
    }

    public function exportToExcel()
    {
        try {
            return Excel::download(new ClientsExport(), 'clients-et-commandes.xlsx');
        } catch (\Exception $e) {
            Log::info($e);
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}