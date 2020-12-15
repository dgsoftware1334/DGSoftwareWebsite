<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;


    protected $model = Demande::class;

    protected $table = 'demandes';
    protected $fillable = ['nom', 'prenom', 'email', 'num', 'pays', 'ville', 'recuCCP','etat'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];
    protected $files = ['recuCCP',];
}
