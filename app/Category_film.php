<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_film extends Model
{
    public function categories(){
    	return $this->belongsToMany('App\Category');
    	return $this->belongsToMany('App\Film');

    }
}
