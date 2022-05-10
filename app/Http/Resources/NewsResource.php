<?php

namespace App\Http\Resources;

use App\Models\Categories;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if (!$request->is('*/noticias/*')) {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'publication_date' => $this->publication_date,
            'img_path' => $this->img_path,
            'categories'=>CategoryResource::collection($this->categories)
        ];
    }
    else{
        return    [
        'id' => $this->id,
        'title' => $this->title,
        'publication_date' => $this->publication_date
        ];
    }
    }
}
