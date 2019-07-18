<?php

namespace App\Http\Resources\Tutorial;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Tutorial\LessonsListCollection;

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
                'description' => $this->description,
                'lessons'=> LessonsListCollection::collection($this->lessons)
            ],
            'links' => [
                'self' => route('section.show', [$this->tutorial->slug, $this->id])
            ]
        ];
    }
}
