<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'attributes'    => [
                'id' => (string)$this->id,
                'title' => $this->title,
                'slug' => $this->slug,
                'view_count'=> $this->view_count,
                'content'=> $this->content,
            ],

           'relationships' => new ArticleRelationshipResource($this),
            'links'         => [
                'self' => route('articles.show', ['article' => $this->id]),
            ],
            'count' => $this->count(),
        ];
    }
}
