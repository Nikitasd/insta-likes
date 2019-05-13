<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at', 'created_at', 'deleted_at'];

    protected $fillable = [
        'user_id',
        'last_user_id',
        'page_type',
        'title',
        'count',
        'cost',
        'link',
        'thumbnail_url',
        'media_id'
    ];
}
