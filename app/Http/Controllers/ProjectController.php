<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(5);

        return view('projects.index', compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = Auth::user();
        // // if (Project::where('user_id', '=', $user-> id)->count() >= 1) {
        // //     session()->flash('status_title', 'Ошибка');
        // //     session()->flash('status_body', 'Увас уже есть проект !');
        // //     return redirect()->back();
        // // }
        // $project = new Project;
        // $project->user_id = $user->id;
        // $project->statuses = 'draft';
        // $project->save();
        return view('projects.create');
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

        Project::create($request->all());

        return redirect()->route('project.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
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
        if ($project->user_id !== $user-> id) {
        session()->flash('status_title', 'Ошибка');
        session()->flash('status_body', 'У вас нет доступа к этому проекту');
        return redirect()->back();
        }else{
            return view('projects.edit', compact('project'));
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

    public function createProject(Request $request,Project $project)
    {
        $user = Auth::user();
        if (Project::where('user_id', '=', $user-> id)->count() >= 1) {
            session()->flash('status_title', 'Ошибка');
            session()->flash('status_body', 'Увас уже есть проект !');
            return redirect()->back();
        }
        $project = new Project;
        $project->user_id = $user->id;
        $project->statuses = 'draft';
        $project->stages = 0;
        // $project->about_source = $request -> about_source;
        // $project->nominations = $request -> nominations;
        // $project->project_ready = $request ->project_ready;
        $project->save();
        return view('projects.create');
    }
    public function updateProject(Request $request,Project $project){
        $user = Auth::user();
        $project = Project::where('user_id', $user->id)->first();
        $project->about_source = $request -> about_source;
        $project->nominations = $request -> nominations;
        $project->project_ready = $request ->project_ready;
        $project->project_name = $request ->project_name;
        $project->stages = $request ->stages;
        $project->save();
        return $project;
    }
    public function showProject(Project $project){
        return Project::first()->get();
    }
}