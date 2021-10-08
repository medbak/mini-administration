<?php


namespace App\Http\Controllers;

use App\Interfaces\CommandeInterface;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    private $commande;

    public function __construct(CommandeInterface $commande)
    {
        $this->commande = $commande;
    }

    public function getCommandeDetails()
    {
        $result = $this->commande->getCommandeDetails();

        return response()->json($result);
        $data['clients'] = $result;

        return view('client.getDetails', $data);
    }
}