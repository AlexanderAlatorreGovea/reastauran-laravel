<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{    
    protected $fillable = ['title', 'keywords', 'full_content', 'category_id' ,'preview_content', 'author', 'image_url', 'amount_of_comments'];

    public function comments()
    { 
        return $this->hasMany(Comment::class);
    }

    public function category() 
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
} 
 