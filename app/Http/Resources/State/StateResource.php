<?php

namespace App\Http\Resources\State;

use App\Http\Resources\District\DistrictResource;
use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
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
            'name' => $this->name,
            'iso2' => $this->iso2,
            'fips_code' => $this->fips_code,
            'slogan' => $this->slogan,
            'population' => $this->population,
            'size' => $this->size,
            'official_language' => $this->official_language,
            'region' => $this->region,
            'href' => [
                'self' => route("states.show",[
                    'country' => $this->country->name,
                    'state' => $this->name
                ]),
                'districts' => route("districts.index",[
                    'country' => $this->country->name,
                    'state' => $this->name
                ]),
            ],
            //'districts' => $this->districts != null ? DistrictResource::collection($this->districts) : null,
        ];
    }
}
