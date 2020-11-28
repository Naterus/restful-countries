<?php

namespace App\Http\Resources\Country;

use App\Http\Resources\Covid19\Covid19Resource;
use App\Http\Resources\President\PresidentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
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
            'full_name' => $this->full_name,
            'current_president' => new PresidentResource($this->president),
            'presidents' => [

            ],
            "covid19" => new Covid19Resource($this->covid19),
            'iso2' => $this->iso2,
            'iso3' => $this->iso3,
            'currency' => $this->currency,
            'phone_code' => $this->code,
            'continent' => $this->continent,
            'size' => $this->size,
            'independence_date' => $this->size,
            'region' => $this->region,
            'capital' => $this->capital,
            'description' => $this->description,
            'population' => $this->population,
            'href' => [
                'self' => route("countries.show",$this->name),
                'states' => route("states.index",$this->name),
                'flag' => asset("storage/images/flags/".$this->flag),
            ]
        ];
    }
}
