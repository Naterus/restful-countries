<?php

namespace App\Http\Resources\Country;

use App\Http\Resources\Covid19\Covid19Resource;
use App\Http\Resources\President\PresidentResource;
use App\President;
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
            'capital' => $this->capital,
            'iso2' => $this->iso2,
            'iso3' => $this->iso3,
            "covid19" => new Covid19Resource($this->covid19),
            'current_president' => new PresidentResource(President::whereCountryId($this->id)->whereNull("appointment_end_date")->first()),
            'currency' => $this->currency,
            'phone_code' => $this->code,
            'continent' => $this->continent,
            'description' => $this->description,
            'size' => number_format($this->size)." km²",
            'independence_date' => $this->independence_date,
            'population' => number_format($this->population),
            'href' => [
                'self' => route("countries.show",$this->name),
                'states' => route("states.index",$this->name),
                'presidents' => route("presidents.index",$this->name),
                'flag' => asset("assets/images/flags/".$this->flag),
            ]
        ];
    }
}
