<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  protected $fillable = ['name'];

  public function blogs(){
    return $this->belongsToMany('App\Models\Blog');
  }

  public function projects(){
    return $this->belongsToMany('App\Models\Project');
  }
}
