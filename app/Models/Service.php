<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'services';

    protected $fillable = ['titre', 'description', 'prix', 'photo', 'deleted_at', 'created_at', 'updated_at' ];

    protected $files = ['photo'];

    protected $dates = ['deleted_at','created_at','updated_at'];

}
