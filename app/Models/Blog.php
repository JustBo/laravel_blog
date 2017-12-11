<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

  protected $fillable = [
    'title',
    'description',
    'body',
    'active',
    'icon'
  ];

  public function categories(){
    return $this->belongsToMany('App\Models\Category')->withTimestamps();
  }

  public function comments(){
    return $this->belongsToMany('App\Models\Comment')->withTimestamps();
  }

  public function getCategoryListAttribute(){
    return $this->categories->pluck('id');
  }

}
