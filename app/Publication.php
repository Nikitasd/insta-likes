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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAdvancedFilter($query)
    {
        $data = $this->validateAdvancedFilter(request()->all());

            return $query
                ->where('is_active', true)
              //  ->latest('amount')
                ->paginate($data['limit']);
    }

    protected function validateAdvancedFilter(array $request)
    {
        $request['limit'] = $request['limit'] ?? 12;

        $validator = validator()->make($request, [
            'limit' => 'sometimes|required|integer|min:1|max:12',
            'page' => 'sometimes|required|integer|min:1',
        ]);

        return $validator->validate();
    }

    public function scopePopularPublication($query)
    {
        $data = $this->validateAdvancedFilter(request()->all());

        return $query
            ->where('is_active', true)
            ->latest('amount')
            ->paginate($data['limit']);
    }

}
