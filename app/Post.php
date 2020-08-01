<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'keywords','content', 'author', 'image_url', 'amount_of_comments'];

    public function blog_posts(){ 
        return $this->belongsTo('App\Blog');
    }
}
