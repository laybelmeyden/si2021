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
    public function updateCurrentUserAvatar(Request $request, User $user)
    {
        $user = Auth::user();
        if ($request->has('currenImg')) {
            $file = $request->file('currenImg');
            $fileName = $file->store('user_avatar', 'public');
            $user->user_avatar = $fileName;
        }
        $user->save();

        return $user;
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
        $user->check__itstart = $request->check__itstart;

        $user->save();

        session()->flash('status_title', 'Сохранено');
        session()->flash('status_body', 'Ваш профиль был успешно сохранен !');
        return redirect()->back();
    }
    public function allUsers()
    {
        if (Auth::user()->role_id === 1) {
            $user = Auth::user();
            $users = User::first()->get();
            return view('profile.allUsers', compact('user', 'users'));
        }
        return redirect()->back();
    }
    public function allUserLogo(User $user){
        $user = Auth::user();
        return $user;
    }
    public function allUsersShow(User $id)
    {
        if (Auth::user()->role_id === 1) {
            return view('profile.allusers.show', compact('id'));
        }
        return redirect()->back();
    }
    public function allUsersShowEdit(User $id)
    {
        if (Auth::user()->role_id === 1) {
            return view('profile.allusers.edit', compact('id'));
        }
        return redirect()->back();
    }
    public function allUsersEdit(Request $request, User $user, $id)
    {
        if (Auth::user()->role_id === 1) {

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
        return redirect()->back();
    }
    public function allUsersDelete($id)
    {
        if (Auth::user()->role_id === 1) {
            $user = User::find($id);
            $user->delete();
            return back();
        }
        return redirect()->back();
    }
}
