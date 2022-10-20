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
            'name' => $this->name,
            'href' => [
                'self' => route("states.show",[
                    'country' => $this->country->name,
                    'state' => $this->state->name,
                    'district' => $this->name
                ]),
                'country' => route("countries.show",$this->country->name),
                'state' => route("states.show",[
                    'country' => $this->country->name,
                    'state' => $this->state->name,
                ]),
            ],
        ];
    }
}
