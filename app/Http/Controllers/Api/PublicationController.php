<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PublicationRequest;
use App\Publication;
use Auth;

class PublicationController extends Controller
{
    public function store(PublicationRequest $request)
    {
        $data = array_merge($request->all(), [
            'user_id' => Auth::id(),
            'last_user_id' => Auth::id(),
        ]);

        $article = new Publication();
        $article->fill($data);
        $article->save();
    }
}
