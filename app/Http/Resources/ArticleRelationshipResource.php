<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleRelationshipResource extends JsonResource
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
            'author'   => [
                'links' => [
                   // 'self'    => route('articles.relationships.user', ['article' => $this->id]),
                    'related' => route('articles.show', ['article' => $this->id]),
                ],
                'data'  => new UserIdentifierResource($this->user),
            ],
           // 'comments' => (new UserCommentsRelationshipResource($this->comments))->additional(['article' => $this]),
        ];
    }
    public function with($request)
    {
        return [
            'links' => [
                'self' => route('articles.index'),
            ],
        ];
    }
}
