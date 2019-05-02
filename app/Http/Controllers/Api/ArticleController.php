<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;


class ArticleController extends Controller
{
    public function index($currentPage, $limit)
    {

        Paginator::currentPageResolver(function() use ($currentPage) {
            return $currentPage;
        });

        $articles = Article::where("published", true)->paginate($limit);


        return $articles;


    }
    public function show($slug)
    {
        return Article::where("slug", $slug)->first();
    }
}
