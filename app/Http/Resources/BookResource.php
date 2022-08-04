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
            'code'=>$this->code,
            'title'=>$this->title,
            'cover_url'=>$this->cover_url,
            'description'=>$this->description,
            'price'=>$this->price,
            'published_at' => $this->published_at->diffForHumans(),
        ];
    }
}
