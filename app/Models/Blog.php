<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

  public function categories(){
    return $this->belongsToMany('App\Models\Category')->withTimestamps();
  }

  public function comments(){
    return $this->belongsToMany('App\Models\Comment')->withTimestamps();
  }

}
