<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use NewsTrait;
    public function index()
    {
//        var_dump(1111111111);
        return \view('news.categories', [
            'categories' => $this->getCategories()
        ]);
    }
}
