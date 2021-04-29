<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Linkexpert;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\Attributes\Node\Attributes;

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
        $projects = Project::get();

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
    public function expertpageviews(User $id){
        $currentUser = $id;
        $currentprojectsdata = Project::all();
        $currentuserdatalinks = Linkexpert::where('user_id', $currentUser->id)->get();
        return view ('experts.expertpageviews', compact('id', 'currentuserdatalinks','currentprojectsdata','currentUser'));
    }
    public function expertpageviewsDeleted($id)
    {
        if (Auth::user()->role_id === 1) {
            $links = Linkexpert::find($id);
            $links->delete();
            return back();
        }
        return redirect()->back();
    }
}
