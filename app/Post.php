<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [
     'title', 'body'
   ];

  public $timestamps = false;

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function reviews() {
    return $this->hasMany('App\Review');
  }
}
