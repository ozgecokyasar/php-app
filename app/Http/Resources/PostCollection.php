<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Post;

class PostCollection extends ResourceCollection
{

     protected $fillable = array('title', 'body');
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
      return parent::toArray($request);

    }
}
