<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;
use App\Http\Requests\UpdateProfile;
use App\Http\Requests\UserUpdatePassword;
use App\Http\Requests\UserUpdateAvatar;
use Mews\Purifier\Facades\Purifier;

class UserController extends Controller
{
    private $requestFields = ['nickname', 'birthday', 'phone', 'avatar', 'email'];

    public function update(UpdateProfile $request, $id)
    {
        $cleanRequest = Purifier::clean($request->only($this->requestFields));
        $updateUser = User::userUpdateProfile($cleanRequest);

        return redirect()->back()->with(['status' => $updateUser, 'fields' => 'profile']);
    }

    public function updatePassword(UserUpdatePassword $request)
    {
        $cleanRequest = Purifier::clean($request->only(['password']));
        $updateUser = User::userUpdatePassword($cleanRequest);

        return redirect()->back()->with(['status' => $updateUser, 'fields' => 'password']);
    }

    public function updateAvatar(UserUpdateAvatar $request)
    {
        $cleanRequest = Purifier::clean($request->only(['avatar']));
        $updateUser = User::userUpdateAvatar($cleanRequest);

        return redirect()->back()->with(['status' => $updateUser, 'fields' => 'avatar']);
    }


    public function showProfile()
    {
        $user = User::whereId(auth()->user()->id)->first();

        return view('cabinet.profile', ['user' => $user]);
    }
}
