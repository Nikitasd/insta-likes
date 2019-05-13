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
            'attributes'    => [
                'slug'            => $this->slug,
                'title' => $this->title,
                'view_count'=> $this->view_count,
                'content'=> $this->content,
                'page_image' => $this->page_image
            ],

           'relationships' => new ArticleRelationshipResource($this),

            'link'         => [ route('articles.show', ['article' => $this->id]) ],
        ];
    }
}
