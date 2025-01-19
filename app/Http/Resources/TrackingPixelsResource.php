<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackingPixelsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ip_address' => $this->ip_address,
            'user_agent' => $this->user_agent,
            'page_url' => $this->page_url,
            'created_at' => $this->created_at
        ];
    }
}
