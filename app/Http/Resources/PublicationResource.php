<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PublicationResource extends JsonResource
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
            'type'          => 'publications',
            'id'            => (string)$this->id,
            'attributes'    => [
                'page_type' => $this->type,
                'title' => $this->title,
                'gain'=> $this->gain,
                'amount'=> $this->amount,
                'cost'=> $this->cost,
                'link' => $this->link,
                'view_count' => $this->view_count,
                'is_active' => $this->is_active,
                'thumbnail_url' => $this->thumbnail_url
            ],

            'relationships' => new PublicationRelationshipResource($this),
        ];
    }
}
