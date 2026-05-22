<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;

class NewsController extends Controller
{
    public function index()
    {
        $newsItems = NewsItem::all();

        
        return view('news.index', [
            'newsItems' => $newsItems,
        ]);
    }
}

     