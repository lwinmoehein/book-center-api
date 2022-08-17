<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'code'=>$this->code,
            'title'=>$this->title,
            'average_rating'=>$this->averageRating->first()!=null?$this->averageRating->first()->value:0,
            'authors' => AuthorResource::collection($this->authors),
            'categories' => CategoryResource::collection($this->categories),
            'reviews'=>ReviewResource::collection($this->reviews),
            'cover_url'=>$this->cover_url,
            'description'=>$this->description,
            'price'=>$this->price,
            'published_at' => $this->published_at->diffForHumans(),
        ];
    }
}
