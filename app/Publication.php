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
        'gain',
        'page_type',
        'title',
        'amount',
        'cost',
        'link',
        'thumbnail_url',
        'media_id'
    ];

    protected $orderable = [
        'amount', 'cost', 'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAdvancedFilter($query)
    {
        return $this->validateAdvancedFilter($query, request()->all())
            ->where('is_active', request('is_active', 1))
            ->orderBy(
                request('order_column', 'created_at'),
                request('order_direction', 'desc')
            )
            ->paginate(request('limit', 12));
    }

    private function validateAdvancedFilter($query, $data)
    {
        $v = validator()->make($data, [
            'order_column' => 'sometimes|required|in:'.$this->orderableColumns(),
            'order_direction' => 'sometimes|required|in:asc,desc',
            'is_active'=>'sometimes|required|boolean',
            'limit' => 'sometimes|required|integer|min:1|max:12',
            'page' => 'sometimes|required|integer|min:1',
        ]);

        if($v->fails()) {
            // debug
            return dd($v->messages()->all());

            throw new ValidationException;
        }
        return $query;
    }

    protected function orderableColumns()
    {
        return implode(',', $this->orderable);
    }

}
