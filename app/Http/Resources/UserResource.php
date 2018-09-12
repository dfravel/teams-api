<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [

            'hashed_id' => $this->hashed_id,
            'name' => $this->first_name . " " . $this->last_name,
            'email' => $this->email,
            'created_at' => (string)$this->created_at,

        ];
    }
}
