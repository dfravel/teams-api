<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
           
            'hashed_id' => $this->hashed_id,
            'name' => $this->name,
            'created_at' => (string)$this->created_at,
            'players' => PlayerResource::collection($this->players)
        ];
    }
}
