<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable  = ['name'];

    protected $table = "categories";

    public function blogs() 
    {
        return $this->belongsTo('App\Blog');
    }
} 
