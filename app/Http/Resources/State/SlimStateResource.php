<?php

namespace App\Http\Resources\State;

use Illuminate\Http\Resources\Json\JsonResource;

class SlimStateResource extends JsonResource
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
            "name" => $this->name,
            "iso2" => $this->iso2,
            "href" => [
                    "self" => route("states.show",[
                        'country' => $this->country->name,
                        'state' => $this->name
                    ]),
                "country" => route("countries.show",$this->country->name)
            ]
        ];
    }
}
