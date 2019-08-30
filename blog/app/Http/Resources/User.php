<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $preserveKeys = true;
    public function toArray($request)
    {
        return [
            'answer'=>$this->answer,
            'id'=>$this->id,
            'ts'=>$this->ts,
            'phone'=>$this->phone,
        ];
    }
}
