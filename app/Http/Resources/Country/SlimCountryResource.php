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
            "currency" => $this->currency,
            "iso2" => $this->iso2,
            "iso3" => $this->iso3,
            'href' => [
                'self' => route("countries.show",$this->name),
                'flag' => asset("assets/images/flags/".$this->flag),
            ]
        ];
    }
}
