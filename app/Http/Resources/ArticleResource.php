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
            'type'          => 'articles',
            'id'            => (string)$this->id,
            'slug'            => $this->slug,
            'attributes'    => [
                'title' => $this->title,
                'view_count'=> $this->view_count,
                'content'=> $this->content,
            ],

           'relationships' => new ArticleRelationshipResource($this),

            'link'         => [ route('articles.show', ['article' => $this->id]) ],
        ];
    }
}
