<?php

namespace App\Http\Resources\Covid19;

use Illuminate\Http\Resources\Json\JsonResource;

class Covid19OnlyResource extends JsonResource
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
            "country_name" => $this->country->name,
            "total_case" => $this->total_case,
            "total_deaths" => $this->total_deaths,
            "last_updated" => $this->updated_at,
            "href" => [
                "country" => route("countries.show",$this->country->name)
            ]
        ];
    }
}
