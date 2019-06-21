<?php

namespace App\Http\Resources\Tutorial;

use Illuminate\Http\Resources\Json\JsonResource;

class LessonsListCollection extends JsonResource
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
            'type' => 'lesson',
            'attributes' => [
                'id' => $this->id,
                'title' => $this->title,
                'slug' => $this->slug,
             ],
            'links' => [
                'self' => route('section.show', [$this->section->tutorial->id, $this->section->id, $this->id])
            ]

        ];
    }
}
