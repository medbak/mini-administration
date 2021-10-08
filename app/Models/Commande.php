<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Commande extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'commande';

    protected $id;
    protected $client_id;
    protected $date_commande;
    protected $numero;
    protected $article;
    protected $montant;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['client_id', 'date_commande', 'numero', 'article', 'montant'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'date_commande' => 'datetime:d-m-Y',
    ];

    /*
     * Une commande appartient à un et un seul client
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
