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
                'body' => $this->body,
                'created_at' => $this->created_at
             ],
            'links' => [
                'self' => route('lesson.show', [$this->section->tutorial->slug, $this->section->slug, $this->slug])
            ]
        ];
    }
}
