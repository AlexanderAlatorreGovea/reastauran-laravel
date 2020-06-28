<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model {
    //category_id is passed down in order to get the id of the category that the food has
    protected $table = 'food_categories';

    protected $fillable = [
        'title', 'description', 'image_url'
    ];

    public function food_items(){
        return $this->hasMany('App\FoodItem', 'category_id');
    }
}
