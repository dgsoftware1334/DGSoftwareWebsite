<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographiePortfolio extends Model
{
    use HasFactory;
    public $table = "infographie_portfolios";

    public function service_info()
    {
        return $this->belongsTo('App\Models\InfographieService');
    }
}
