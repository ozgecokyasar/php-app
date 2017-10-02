<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource
{

     protected $fillable = array('title', 'body');
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'title' => $this->title,
          'body' => $this->body,
          'reviews' => $this->reviews,
        ];


    }


}
