<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galerie extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'galeries';

    protected $fillable = ['titre', 'catégorie', 'main_image', 'id_service', 'deleted_at', 'created_at', 'updated_at' ];

    protected $files = ['main_image'];

    protected $dates = ['deleted_at','created_at','updated_at'];

    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }
}
