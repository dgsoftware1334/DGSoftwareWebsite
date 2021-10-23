<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public $table = "commandes";

    public function infographieService()
    {
        return $this->belongsTo('App\Models\InfographieService');
    }

    public function client()
    {
        return $this->hasOne('App\Models\Visiteur');
    }
}
