<?php

namespace App\Http\Resources\President;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PresidentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "data" => PresidentResource::collection($this->collection)
        ];
    }
}
