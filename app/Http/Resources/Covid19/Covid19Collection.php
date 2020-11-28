<?php

namespace App\Http\Resources\Covid19;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Covid19Collection extends ResourceCollection
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
            "data" => Covid19OnlyResource::collection($this->collection)
        ];
    }
}
