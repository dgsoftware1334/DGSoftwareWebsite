<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfographieWork extends Model
{
    use HasFactory;
    use SoftDeletes;  
    protected $dates = ['deleted_at'];  
    public $table = "infographie_works";

    public function infographieService()
    {
        return $this->belongsTo('App\Models\InfographieService');
    }

    

}
