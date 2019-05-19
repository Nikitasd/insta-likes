<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublicationRequest;
use App\Publication;
use App\Http\Resources\PublicationResource;
use Illuminate\Http\Response;
use Auth;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::with([
            'user:users.id',
        ])->advancedFilter();

        $collection = PublicationResource::collection($publications);

        return $collection->response()
            ->setStatusCode(Response::HTTP_PARTIAL_CONTENT);
    }

    public function show(Publication $publication)
    {
        PublicationResource::withoutWrapping();
        return new PublicationResource($publication);
    }

    public function add(PublicationRequest $request)
    {
        $data = array_merge($request->all(), [
            'user_id' => Auth::id()
        ]);

        $article = new Publication();
        $article->fill($data);
        $article->save();
    }
}
