<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Project;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function setting_profile($id)
    {
        $user = Auth::user();

        return view('profile.pages.setting_user', compact('user'));
    }
    public function updateCurrentUser(Request $request, User $user)
    {

        $user = Auth::user();

        $user->user_name = $request->user_name;
        $user->user_surname = $request->user_surname;
        $user->user_middlename = $request->user_middlename;
        $user->user_phone = $request->user_phone;
        $user->user_city = $request->user_city;
        $user->user_education = $request->user_education;
        $user->user_moreinfo = $request->user_moreinfo;

        $user->save();

        session()->flash('status_title', 'Сохранено');
        session()->flash('status_body', 'Ваш профиль успешно сохранен !');
        return redirect()->back();
    }
    public function allUsers()
    {
        $user = Auth::user();
        $users = User::first()->get();
        return view('profile.allUsers', compact('user', 'users'));
    }
    public function allUsersShow(User $id)
    {
        return view('profile.allusers.show', compact('id'));
    }
    public function allUsersShowEdit(User $id)
    {
        return view('profile.allusers.edit', compact('id'));
    }
    public function allUsersEdit(Request $request, User $user, $id)
    {

        $id = User::find($id);

        $id->user_name = $request->user_name;
        $id->user_surname = $request->user_surname;
        $id->user_middlename = $request->user_middlename;
        $id->user_phone = $request->user_phone;
        $id->user_city = $request->user_city;
        $id->user_education = $request->user_education;
        $id->user_moreinfo = $request->user_moreinfo;

        $id->save();

        return redirect('/allUsers');
    }
    public function allUsersDelete($id)
    {
        $user = User::find($id);
        $user -> delete();
        return back();
    }
}
