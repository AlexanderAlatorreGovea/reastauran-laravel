<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//many to many one role can have many roles and vice versa
class Role extends Model {
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
