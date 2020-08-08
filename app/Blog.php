<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{    
    protected $fillable = ['title', 'keywords', 'full_content' ,'preview_content', 'author', 'image_url', 'amount_of_comments'];

    public function comments()
    { 
        return $this->hasMany(Comment::class);
    }
}
 