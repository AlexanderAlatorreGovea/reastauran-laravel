<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{    
    protected $fillable = ['title', 'keywords','content', 'author', 'image_url', 'amount_of_comments'];

    public function posts(){ 
        return $this->hasMany('App\Post');
    }
}
 