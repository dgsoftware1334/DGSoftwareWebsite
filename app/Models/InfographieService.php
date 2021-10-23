<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfographieService extends Model
{
    use HasFactory;
    use SoftDeletes;  
    protected $dates = ['deleted_at'];  
    public $table = "infographie_services";

    public function infographieWorks()
    {
        return $this->hasMany('App\Models\InfographieWork');
    }

    public function images()
    {
        return $this->hasMany('App\Models\InfographiePortfolio');
    }

    public function commandes()
    {
        return $this->hasMany('App\Models\Commande');
    }


}
