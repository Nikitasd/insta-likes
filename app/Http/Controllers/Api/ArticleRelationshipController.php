<?php

namespace App\Http\Controllers\Api;


use App\Http\Resources\CommentsResource;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleRelationshipController extends Controller
{
    public function comments(Article $article)
    {
        return new CommentsResource($article->comments);
    }
}
