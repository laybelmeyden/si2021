<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class MainController extends Controller
{
    public function index() {
        $news = News::latest()
        ->limit(3)
        ->get();

        return view('main', compact('news'));
    }
    public function news()
    {
        return News::latest()->paginate(3);
    }
    public function newssolo(News $id){
        return view ('newsitem', compact('id'));
    }
}
