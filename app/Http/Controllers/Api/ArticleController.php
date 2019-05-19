<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Response;


class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::with([
            'user:users.id,users.username',
        ])->advancedFilter();


        $collection = ArticleResource::collection($articles);

        return $collection->response()
            ->setStatusCode(Response::HTTP_PARTIAL_CONTENT);
    }

    public function show(Article $article)
    {
        ArticleResource::withoutWrapping();
        return new ArticleResource($article);
    }
}
