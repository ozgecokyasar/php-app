<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Post;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
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

    public function with($request) {
      return [
        'version' => '2.0.0'
      ];
    }
}
