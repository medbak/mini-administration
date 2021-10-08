<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Client::factory()->count(100)->create()->each(function($client) {
             Commande::factory()->count(random_int(1,12))->create([
                 "client_id" => $client->id
             ]);
         });
    }
}
