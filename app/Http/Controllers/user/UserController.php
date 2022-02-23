<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:30',
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'englishDegree' => ['required', 'numeric', 'min:45', 'max:60'],
            'highSchoolTotalMarks' => ['required', 'numeric', 'min:250', 'max:300'],
            'phone' => 'required|numeric|phone',
            'cpassword' => 'required|min:6|max:30|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->englishDegree = $request->englishDegree;
        $user->highSchoolTotalMarks = $request->highSchoolTotalMarks;

        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            return redirect()->back()->with('success', 'You registered successfully');
        } else {
            return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5|max:30',
        ], [
            'email.exists' => 'This email dosent exist'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('user.home');
        } else {
            return redirect()->route('user.login')->with('failed', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
