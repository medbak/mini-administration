<?php

namespace App\Repositories;

use App\Interfaces\CommandeInterface;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;

class CommandeRepository implements CommandeInterface
{

    public function getCommandeDetails()
    {


        $data = Commande::join('client', 'commande.client_id', '=', 'client.id')
            ->selectRaw(
                'CONCAT(client.prenom, " ", client.nom) as nom_complet, 
                commande.montant,
                commande.date_commande,
                commande.numero,
                commande.articles
                '
            )
            ->orderBy('numero', 'desc')
            ->get();
        return $data;
    }
}