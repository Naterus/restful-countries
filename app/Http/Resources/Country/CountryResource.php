<?php

namespace App\Http\Resources\Country;

use App\Http\Resources\State\StateResource;
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
            'id' => $this->id,
            'name' => $this->name,
            'iso2' => $this->iso2,
            'iso3' => $this->iso3,
            'currency' => $this->currency,
            'phone_code' => $this->code,
            'capital' => $this->capital,
            'description' => $this->description,
            'population' => $this->population,
            'href' => [
                'self' => route("countries.show",$this->id),
                'states' => route("states.index",$this->id),
                'flag' => asset("storage/images/flags/".$this->flag),
            ],
            //'states' => StateResource::collection($this->states)
        ];
    }
}
