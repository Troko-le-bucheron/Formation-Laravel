<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleController extends Controller
{
    function all() 
    {
        $articles = Article::all();
        return $articles;
    }
    function show(Article $article)
    {
        return $article;
    }

}
