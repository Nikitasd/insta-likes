<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Article extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at', 'created_at', 'deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'last_user_id',
        'title',
        'slug',
        'page_image',
        'content',
        'meta_description',
        'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAdvancedFilter($query)
    {
        $data = $this->validateAdvancedFilter(request()->all());

        return $query->paginate($data['limit']);
    }

    protected function validateAdvancedFilter(array $request)
    {
        $request['limit'] = $request['limit'] ?? 15;

        $validator = validator()->make($request, [
            'limit' => 'sometimes|required|integer|min:1',
            'page' => 'sometimes|required|integer|min:1',
        ]);


        return $validator->validate();
    }
}
