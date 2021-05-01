<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\User;
use App\Mail\mailDraft;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Linkexpert;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $projects = Project::all();
        $projectsAccepted = Project::where('statuses', 'accepted')->get();
        $projectsModerate = Project::where('statuses', 'moderate')->get();
        $projectsDraft = Project::where('statuses', 'draft')->get();
        if ($user->role_id === 1) {
            $projectsDraftCount = $projects->where('statuses', 'draft')->count();
            $projectsModerateCount = $projects->where('statuses', 'moderate')->count();
            $projectsAcceptedCount = $projects->where('statuses', 'accepted')->count();
            return view(
                'projects.index',
                compact(
                    'projects',
                    'projectsDraftCount',
                    'projectsModerateCount',
                    'projectsAcceptedCount',
                    'projectsAccepted',
                    'projectsDraft',
                    'projectsModerate',
                )
            );
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if (Project::where('user_id', '=', $user->id)->count() >= 1) {
            session()->flash('status_title', 'Ошибка');
            session()->flash('status_body', 'Увас уже есть проект !');
            return redirect()->back();
        } else {
            return view('projects.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        // Project::create($request->all());
        // return redirect()->route('project.index')
        //     ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        $user = Auth::user();
        if ($user->role_id === 1 || $user->role_id === 3) {

            $projectExpertViews = Linkexpert::where('user_id', $user->id)->where('project_id', $project->id)->get();

            return view('projects.show', compact('project', 'projectExpertViews'));
        }
        if ($project->user_id !== $user->id) {
            session()->flash('status_title', 'Ошибка');
            session()->flash('status_body', 'У вас нет доступа к этому проекту');
            return redirect()->back();
        }
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $user = Auth::user();
        if ($project->user_id !== $user->id) {
            session()->flash('status_title', 'Ошибка');
            session()->flash('status_body', 'У вас нет доступа к этому проекту');
            return redirect()->back();
        } else {
            if ($project->statuses === 'draft') {
                return view('projects.edit', compact('project'));
            } else {
                session()->flash('status_title', 'Ошибка');
                session()->flash('status_body', 'Проект отправлен, его нельзя редактировать');
                return redirect()->back();
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);

        $project->update($request->all());

        return redirect()->route('projects.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Product deleted successfully');
    }

    public function createProject(Request $request, Project $project)
    {
        $user = Auth::user();
        if (Project::where('user_id', '=', $user->id)->count() >= 1) {
            session()->flash('status_title', 'Ошибка');
            session()->flash('status_body', 'Увас уже есть проект !');
            return redirect()->back();
        }
        $project = new Project;
        $project->user_id = $user->id;
        $project->statuses = 'draft';
        $project->project_ready = 'product';
        $project->stages = 1;

        $project->save();
        return view('projects.create');
    }
    public function sendProject(Request $request, Project $project)
    {
        $user = Auth::user();
        $project = Project::where('user_id', $user->id)->first();
        $project->statuses = 'moderate';
        $project->save();

        return view('home');
    }
    public function updateProject(Request $request, Project $project)
    {
        $user = Auth::user();
        $project = Project::where('user_id', $user->id)->first();

        if ($request->filled('stages')) $project->stages = $request->stages;
        if ($request->filled('pending')) $project->pending = $request->pending;
        if ($request->filled('other')) $project->other = $request->other;
        if ($request->filled('about_source')) $project->about_source = $request->about_source;
        if ($request->filled('nominations')) $project->nominations = $request->nominations;
        if ($request->filled('project_ready')) $project->project_ready = $request->project_ready;
        if ($request->filled('project_name')) $project->project_name = $request->project_name;
        if ($request->filled('project_body')) $project->project_body = $request->project_body;
        if ($request->filled('project_social')) $project->project_social = $request->project_social;
        if ($request->filled('project_target')) $project->project_target = $request->project_target;
        if ($request->has('file1')) {
            $file = $request->file('file1');
            $fileName = $file->store('/public/files__project');
            // $fileName = $file->getClientOriginalName();
            // $file->move(public_path('/storage/files__project'), $fileName);
            $project->project_presentations = $fileName;
        }
        if ($request->has('file2')) {
            $file = $request->file('file2');
            $fileName = $file->store('/public/files__project');
            $project->project_files_1 = $fileName;
        }
        if ($request->has('file3')) {
            $file = $request->file('file3');
            $fileName = $file->store('/public/files__project');
            $project->project_logo = $fileName;
        }
        if ($request->filled('project_video')) $project->project_video = $request->project_video;
        if ($request->filled('project_mts')) $project->project_mts = $request->project_mts;
        if ($request->filled('project_main_fio')) $project->project_main_fio = $request->project_main_fio;
        if ($request->filled('project_main_info')) $project->project_main_info = $request->project_main_info;
        if ($request->filled('project_main_phone')) $project->project_main_phone = $request->project_main_phone;
        if ($request->filled('project_main_years')) $project->project_main_years = $request->project_main_years;
        if ($request->filled('project_main_teams')) $project->project_main_teams = $request->project_main_teams;
        if ($request->filled('project_main_security')) $project->project_main_security = $request->project_main_security;
        if ($request->filled('project_main_social_links_1')) $project->project_main_social_links_1 = $request->project_main_social_links_1;
        if ($request->filled('project_main_social_links_2')) $project->project_main_social_links_2 = $request->project_main_social_links_2;
        if ($request->filled('project_main_social_links_3')) $project->project_main_social_links_3 = $request->project_main_social_links_3;

        $project->save();
        return $project;
    }
    public function showProject(Project $project)
    {
        $user = Auth::user();
        $project = Project::where('user_id', '=', $user->id)->get();
        return $project;
    }
    public function draftProject(Project $project, $id)
    {
        $project = Project::find($id);
        $user = User::find($project->user_id);

        $project->statuses = 'draft';
        $project->save();
        $msg__experts = request('draft__msg');
        $to_name = 'Social Idea 2021';
        $data = array('email' => $user->email);
        Mail::to($data['email'], $to_name)->send((new mailDraft($msg__experts)));

        session()->flash('status_title', 'Успешно');
        session()->flash('status_body', 'Проект отклонен');

        return redirect()->back();
    }
    public function acceptedProject(Project $project, $id)
    {
        $project = Project::find($id);
        $user = User::find($project->user_id);

        $project->statuses = 'accepted';
        $project->save();

        $to_email = 'socialidea.mts@yandex.ru';
        $to_name = 'Social Idea 2021';
        $data = array('email' => $user->email);
        \Mail::send('email.mailAccepted', $data, function ($message) use ($to_email, $data, $to_name) {
            $message->from($to_email);
            $message->to($data['email'], $to_name)->subject('Статус проекта');
        });

        session()->flash('status_title', 'Успешно');
        session()->flash('status_body', 'Проект принят на конкурс');

        return redirect()->back();
    }
}
