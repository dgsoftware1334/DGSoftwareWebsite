<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Developpement extends Model
{
    use HasFactory;
    public $table = "developpements";
    use SoftDeletes;  
    protected $dates = ['deleted_at'];  

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    
}
