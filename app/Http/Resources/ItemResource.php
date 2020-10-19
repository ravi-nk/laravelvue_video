<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
            return [
            'id'=> $this->id,
            'image'=> $this->image,
            'title' => $this->title,
            'des'=> $this->des,
            'year'=> $this->year,
            'duration'=> $this->duration,
            'quality'=> $this->quality,
            'type' => $this->type,
            ] ;       
    }
}
