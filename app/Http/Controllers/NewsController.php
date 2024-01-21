<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    use NewsTrait;
    public function index(int $categoryId)
    {
        return \view('news.index', [
            'news' => $this->getNews($categoryId)
        ]);
    }

    public function show(int $id)
    {
        return \view('news.show', [
            'news' => $this->getNews($id)
        ]);
    }

    public function showByCategory(int $categoryId)
    {
        return \view('news.index', [
            'news' => $this->getNewsByCategory($categoryId)
        ]);
    }
}
