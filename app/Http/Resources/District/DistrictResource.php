<?php

namespace App\Http\Resources\District;

use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'nick_name' => $this->nick_name,
            'description' => $this->description,
            'population' => $this->population,
            'size' => $this->size,
            'official_language' => $this->official_language,
            'href' => [
                'self' => route("districts.show",[
                    'country' => $this->country_id,
                    'state' => $this->state_id,
                    'district' => $this->id
                    ])
            ]
        ];
    }
}
