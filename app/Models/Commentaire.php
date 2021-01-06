<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
     protected $table = 'commentaires';

    protected $fillable = ['nom', 'email', 'message', 'rating', 'cours_ID'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];
}
