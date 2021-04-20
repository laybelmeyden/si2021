<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class ExpertController extends Controller
{
    public function expertsProject(){

        $experts = User::all();

        return view('experts.expertsProject', compact('experts'));
    }
    public function expertsProjectView(){

        $experts = User::first()->limit(20)->get();

        return $experts;
    }
    public function expertsProjectViewProject(){
        $projects = Project::all();

        return $projects;
    }
    public function projectLink(){
        $projects = Project::all();
        $experts = User::all();
        dd($projects);
        return [$projects, $experts];
    }
}
