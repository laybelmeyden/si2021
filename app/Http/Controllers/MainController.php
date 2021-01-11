<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class MainController extends Controller
{
    public function index() {
        $news = News::latest()
        ->limit(1)
        ->get();

        return view('main', compact('news'));
    }
    public function news()
    {
        $newSmalls = News::where('values_op', 'option2')->latest()->paginate(3);
        return $newSmalls;
    }
    public function newssolo(News $id){
        return view ('newsitem', compact('id'));
    }
}
