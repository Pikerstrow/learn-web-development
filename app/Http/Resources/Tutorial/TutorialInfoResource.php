<?php

namespace App\Http\Resources\Tutorial;

use Illuminate\Http\Resources\Json\JsonResource;

class TutorialInfoResource extends JsonResource
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
            'type' => 'tutorial',
            'attributes' => [
                'id' => $this->id,
                'title' => $this->title,
                'slug' => $this->slug,
                'description' => $this->description,
                'info' => [
                    'sections' => $this->sections ? $this->sections()->count() : null,
                    'lessons' => $this->lessons ? $this->lessons()->count(): null,
                    'quiz' => mt_rand(4, 12), //TODO::select from DB
                    'type' => $this->type
                ],
                'ratingInfo' => [
                    'rating' => $this->rating ? $this->rating->rating : 0,
                    'votes' => $this->rating ? $this->rating->votes : 0,
                ],
                'styles' => [
                    'headerBackground' => $this->header_background_color,
                    'iconClass' => $this->header_icon_class,
                    'iconColor' => $this->header_icon_color
                ]
            ],
            'links' => [
                'self' => route('tutorial.show', $this->id)
            ]
        ];
    }
}
