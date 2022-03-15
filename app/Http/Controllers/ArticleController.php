<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "name" => "Erza Janitradevi",
            "email" => "erzaa@gmail.com",
            "articles" =>  Article::all(),
            // refer ke article.php
            "title" => "Artikel Berita"
        ]);
    }
   
    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }



}
