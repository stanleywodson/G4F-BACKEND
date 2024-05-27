<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'created_at_humans' => Carbon::parse($this->created_at)->diffForHumans(),
            'created_at' =>  Carbon::parse($this->created_at)->format('d/m/Y'),
            'update_at' =>  Carbon::parse($this->updated_at)->format('d/m/Y'),
        ];
    }
}
