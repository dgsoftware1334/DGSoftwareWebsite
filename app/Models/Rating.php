<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';

    protected $fillable = ['rating', 'rateable_type', 'rateable_id', 'user_id'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];
}
