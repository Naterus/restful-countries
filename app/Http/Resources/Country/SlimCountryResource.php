<?php

namespace App\Http\Resources\Country;

use Illuminate\Http\Resources\Json\JsonResource;

class SlimCountryResource extends JsonResource
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
            "phone_code" => $this->code,
            'href' => [
                'self' => route("countries.show",$this->name),
                'flag' => asset("storage/images/flags/".$this->flag),
            ]
        ];
    }
}
