<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commande extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'commandes';

    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'adresse', 'quantité','produit', 'recu', 'details', 'created_at', 'updated_at' ];

    protected $files = ['recu'];

    protected $dates = ['created_at','updated_at'];

}
