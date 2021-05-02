<?php

namespace App\Http\Controllers;

use App\Models\NetworkSwitch;
use App\Models\Port;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function show() {
        return view('content.user');
    }

    public function changeUserInfo(Request $request) {
        $errors = [];
        $user = User::find(Auth::id());
        if ($request->input('name') == null) array_push($errors, "Name is Required");
        if ($request->input('email') == null) array_push($errors, "Email is Required");
        if (count($errors) > 0) {
            return view('content.user')->withErrors($errors);
        }
        if (Hash::check($request->input('old-password'), $user->password)) {
            if ($request->input('new-password') != "") {
                if ($request->input('new-password') == $request->input('confirm-password')) {
                    $user->password = Hash::make($request->input('new-password'));
                } else {
                    array_push($errors, "Passwords do not match");
                    return view('content.user')->withErrors($errors);
                }
            }

            $user->name = $request->input('name');
            $user->email = $request->input('email'); // No Validation Checking
            $user->save();
        } else {
            array_push($errors, "Wrong Password");
            return view('content.user')->withErrors($errors);
        }
        return redirect()->route('home');
    }

}
