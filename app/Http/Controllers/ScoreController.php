<?php

namespace App\Http\Controllers;
use App\Scorevote;
use App\Voteall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function allscoreviews()
    {
        $scores = Scorevote::all();
        $scores1 = Scorevote::where('category', '1')->get();
        $scores2 = Scorevote::where('category', '2')->get();
        $scores3 = Scorevote::where('category', '3')->get();
        $scores4 = Scorevote::where('category', '4')->get();
        $scores5 = Scorevote::where('category', '5')->get();
        // $user = Auth::user();
        // $project = Project::where('user_id', $user->id)->first();
        // $project->statuses = 'moderate';
        // $project->save();

        return view('score.mainscore', compact('scores', 'scores1', 'scores2', 'scores3', 'scores4', 'scores5'));
    }
    public function score_vote_add(){
        return view('score.score_vote_add');
    }
    public function table_score_vote(){
        $scores = Scorevote::all();
        $scores1 = Scorevote::where('category', '1')->orderBy('all_score', 'desc')->get();
        $scores2 = Scorevote::where('category', '2')->orderBy('all_score', 'desc')->get();
        $scores3 = Scorevote::where('category', '3')->orderBy('all_score', 'desc')->get();
        $scores4 = Scorevote::where('category', '4')->orderBy('all_score', 'desc')->get();
        $scores5 = Scorevote::where('category', '5')->orderBy('all_score', 'desc')->get();
        return view('score.table_score_vote', compact('scores', 'scores1', 'scores2', 'scores3', 'scores4', 'scores5'));
    }
    public function create_votes(Request $request, Scorevote $scorevotes){
        $scorevotes = new Scorevote;
        $scorevotes->name_project = $request->name_project;
        $scorevotes->body_project = $request->body_project;
        $scorevotes->score_ball = $request->score_ball;
        $scorevotes->category = $request->category;
        $scorevotes->save();

        return redirect()->back();
    }
    public function score_view(Scorevote $id){
        return view('score.score_view', compact('id'));
    }
    public function create_votes_experts(Request $request, Voteall $votealls){
        $votealls = new Voteall;
        $votealls->scorevote_id = $request->scorevote_id;
        $votealls->score1 = $request->score1;
        $votealls->score5 = $request->score5;
        $votealls->score3 = $request->score3;
        $votealls->score4 = $request->score4;
        $votealls->full_name = $request->full_name;
        $votealls->comments = $request->comments;
        $votealls->save();

        session()->flash('status_title', 'Успешно');
        session()->flash('status_body', 'Оценка отправлена !');
        return redirect('/all_score_votes');
    }
    public function tableDelete($id)
    {
            $votes = Voteall::find($id);
            $votes->delete();
            return redirect()->back();
    }
    public function updateScore_table(Request $request, Scorevote $scorevote){
        $project_id = $request->project_id;
        $projectExp = explode(',', $project_id);
        $score_id = $request->all_score;
        $scoreExp = explode(',', $score_id);
            foreach ($scoreExp as $value => $si){
                $projectFind = $scorevote->find($projectExp[$value]);
                $projectFind->all_score = (int)$si;
                $projectFind->save();
            }
            return back();
    }
}
