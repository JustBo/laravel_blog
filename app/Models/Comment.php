<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
      'body',
      'user_id'
  ];
  /**
   * comment model always run with user table
   *
   * @var array
   */
  protected $with = ['user'];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function blog(){
    return $this->belongsToMany('App\Models\Blog');
  }
}
