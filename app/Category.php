<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
        'title',
    ];
     public function films()
    {
      //  return $this->belongsToMany(Film::class);
        return $this->belongsToMany('App\Film');

    }
}
