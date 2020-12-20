<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = 'cours';

    protected $fillable = ['cours', 'description', 'payant', 'durée', 'catégories'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];

}
