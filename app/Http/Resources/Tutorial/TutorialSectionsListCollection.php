<?php

namespace App\Http\Resources\Tutorial;

use Illuminate\Http\Resources\Json\JsonResource;

class TutorialSectionsListCollection extends JsonResource
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
            'type' => 'tutorial section',
            'attributes' => [
                'id' => $this->id,
                'title' => $this->title,
                'slug' => $this->slug,
                'description' => $this->description
            ],
            'links' => [
                'self' => route('section.show', [$this->tutorial->id, $this->id])
            ]
        ];
    }
}
