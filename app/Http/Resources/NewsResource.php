<?php

namespace App\Http\Resources;

use App\Models\Categories;
use Illuminate\Http\Resources\Json\JsonResource;

use function Ramsey\Uuid\v1;

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


        if ($request->is('*/noticia/*')) {

        return [
            'id_new' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'publication_date' => $this->publication_date,
            'img_path' => $this->img_path,
             'categories'=>CategoryResource::collection(Categories::newsCategories(1))
        ];
    }
        else if ($request->is('*/noticias/*')) {{
            return    [
            'id' => $this->id,
            'title' => $this->title,
            'publication_date' => $this->publication_date
            ];
        }
        } else if ($request->is('*/categoria/*')) {{
                return    [
                    'id' => $this->id,
                    'title' => $this->title,
                    'publication_date' => $this->publication_date
                    ];
        }}
}}
