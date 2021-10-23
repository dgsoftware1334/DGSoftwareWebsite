<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SecteurActivite extends Model
{
    use HasFactory;
    use SoftDeletes;  
    protected $dates = ['deleted_at'];  
    protected $fillable = ['NomSecteur','Introduction','Description'];
    
}
