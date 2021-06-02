<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
        
        $user = User::where('role_id', '1')->get();
        $news = Oldnew::orderBy('createdate', 'desc')->paginate(9);

        return view ('oldnews', compact('news', 'user'));
    }
    public function oldnews_in(Oldnew $id){

        return view ('oldnews_in', compact('id'));
    }
    public function oldnews_in_delete($id){
        if (Auth::user()->role_id === 1) {
            $news = Oldnew::find($id);
            $news->delete();
            return back();
        }
        return redirect()->back();
    }

}
