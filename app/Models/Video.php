<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public $table = "videos";

    public function developpement()
    {
        return $this->belongsTo('App\Models\Developpement');
    }
}
