<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ExpertController extends Controller
{
    public function expertsProject(){

        $experts = User::all();

        return view('experts.expertsProject', compact('experts'));
    }
    public function expertsProjectView(){

        $experts = User::all();

        return $experts;
    }
}
