<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Enums\FriendlinessEnum;
use App\Enums\GenderEnum;

class EditAnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
            'name'          => $this->name,
            'nickname'      => $this->nickname,
            'weight'        => $this->weight,
            'height'        => $this->height,
            'gender'        => GenderEnum::from($this->gender)->name,
            'friendliness'  => FriendlinessEnum::from($this->friendliness)->name,
            'color'         => $this->color,
            'date_of_birth' => $this->date_of_birth,
        ];
    }
}
