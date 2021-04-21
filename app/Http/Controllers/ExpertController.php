<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Linkexpert;

class ExpertController extends Controller
{
    public function expertsProject()
    {

        $experts = User::all();

        return view('experts.expertsProject', compact('experts'));
    }
    public function expertsProjectView()
    {

        $experts = User::first()->limit(20)->get();

        return $experts;
    }
    public function expertsProjectViewProject()
    {
        $projects = Project::all();

        return $projects;
    }
    public function projectLinkView()
    {
        $expertlink = Linkexpert::all();

        return $expertlink;
    }
    public function projectLink(Request $request, Linkexpert $expertlink)
    {
        $expertlink = new Linkexpert;
        $expertlink->user_id = $request->user_id;
        $expertlink->project_id = $request->project_id;
        $expertlink->save();

        return redirect()->back();
    }
}
