<?php


namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'version' => $this->version,
            'date_added' => $this->date_added
        ];
    }
}
