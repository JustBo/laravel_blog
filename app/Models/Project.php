<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  protected $fillable = [
    'title',
    'description',
    'icon',
    'url',
    'active',
  ];

  public function categories(){
    return $this->belongsToMany('App\Models\Category');
  }

  public function getCategoryListAttribute(){
    return $this->categories->pluck('id');
  }

}
