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
            'user'   => [
                'data'  => new UserIdentifierResource($this->user),
            ],
            'comments' => (new ArticleCommentsRelationshipResource($this->comments)),
        ];
    }
}
