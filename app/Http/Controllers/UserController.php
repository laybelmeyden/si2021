<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function setting_profile() {
        $user = Auth::user();

        return view('profile.pages.setting_user', compact('user'));
    }
}
