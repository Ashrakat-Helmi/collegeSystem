<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\employee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:6|max:30',
            'cpassword' => 'required|min:6|max:30|same:password',
            'gender' => ['required'],
            'phone' => 'required|numeric|phone',
            'empId' => 'required',

        ]);

        $employee = new employee();
        $employee->name = $request->name;
        $employee->email = $request->email;

        $employee->phone = $request->phone;
        $employee->empId = $request->empId;
        $employee->gender = $request->gender;

        $employee->password = Hash::make($request->password);
        $save = $employee->save();

        if ($save) {
            return redirect()->back()->with('success', 'You registered successfully');
        } else {
            return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:employees,email',
            'password' => 'required|min:6|max:30',
        ], [
            'email.exists' => 'This email dosent exist'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('employee')->attempt($creds)) {
            return redirect()->route('employee.home');
        } else {
            return redirect()->route('employee.login')->with('failed', 'Incorrect Credentials');
        }
    }

    
    function index()
    {
        $users = User::all();
        dd($users);
        $users = User::orderBy('created_at', 'Asc')->limit(10)->get();
        return view('dashboard.employee.home', [
            'users' => $users,
        ]); //returns the view with posts

    }
    function logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
