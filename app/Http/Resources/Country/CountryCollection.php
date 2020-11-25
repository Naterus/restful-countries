<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CountryCollection extends ResourceCollection
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
            'data' => $this->collection->count() > 0 ? CountryResource::collection($this->collection) : null
        ];
    }
}
