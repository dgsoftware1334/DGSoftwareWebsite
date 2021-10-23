<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;  
    protected $dates = ['deleted_at'];  
    public $table = "services";

    public function developpements()
    {
        return $this->hasMany('App\Models\Developpement');
    }
    
    public function images()
    {
        return $this->hasMany('App\Models\Portfolio');
    }
}
