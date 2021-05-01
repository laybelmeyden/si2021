<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Linkexpert;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
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

        $experts = User::where('role_id', 3)->get();

        return $experts;
    }
    public function expertsProjectViewProject()
    {
        $projects = Project::where('statuses', 'accepted')->get();
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
    public function getRoleUser(Request $request, User $user)
    {
        $user = User::find($user->id);

        $user->role_id = $request->role_id;

        $user->save();

        session()->flash('status_title', 'Сохранено');
        session()->flash('status_body', 'Ваш профиль был успешно сохранен !');
        return redirect()->back();
    }
    public function expertRatings(Linkexpert $links, $id, Request $request){
        $links = Linkexpert::find($id);
        // $user = User::find($project->user_id);
        $links->score1 = $request->score1;
        $links->score2 = $request->score2;
        $links->score3 = $request->score3;
        $links->score4 = $request->score4;
        $links->msg1 = $request->msg1;
        $links->save();
        // $project->statuses = 'accepted';
        // $project->save();

        // $to_email = 'socialidea.mts@yandex.ru';
        // $to_name = 'Social Idea 2021';
        // $data = array('email' => $user->email);
        // \Mail::send('email.mailAccepted', $data, function ($message) use ($to_email, $data, $to_name) {
        //     $message->from($to_email);
        //     $message->to($data['email'], $to_name)->subject('Статус проекта');
        // });

        session()->flash('status_title', 'Успешно');
        session()->flash('status_body', 'Проект оценен!');

        return redirect('/home');
    }
}
