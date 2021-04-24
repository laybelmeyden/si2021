<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Oldnew;

class MainController extends Controller
{
    public function index() {
        $news = News::where('values_op', 'option1')->latest()->limit(1)
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
    public function stats(){
        return view ('statistics');
    }
    public function online(){
        return view ('online');
    }
    public function allspeakers(){
        return view ('allspeakers');
    }
    public function photos(){
        return view ('photos');
    }

    public function oldnews(){

        $news = Oldnew::latest()->get();

        return view ('oldnews', compact('news'));
    }
    public function oldnews_in(Oldnew $id){

        return view ('oldnews_in', compact('id'));
    }

}
