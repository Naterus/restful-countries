<?php

namespace App\Http\Resources\President;

use Illuminate\Http\Resources\Json\JsonResource;

class PresidentResource extends JsonResource
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
            "gender" => $this->gender,
            "appointment_start_date" => $this->appointment_start_date,
            "appointment_end_date" => $this->appointment_end_date,
            "appointment_end_date" => $this->appointment_end_date,
            "href" => [
                "self" => route("presidents.show",["country"=>str_replace(" ","-",$this->country->name),"president"=>str_replace(" ","-",$this->name)]),
                "country" => route("countries.show",str_replace(" ","-",$this->country->name)),
                "picture" => asset("storage/images/presidents/".$this->picture),
            ]
        ];
    }
}
