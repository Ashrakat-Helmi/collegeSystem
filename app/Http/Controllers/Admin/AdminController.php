<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\appliedDesires;
use App\Models\employee;
use App\Models\FinalDecision;
use App\Models\PreDecision;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6|max:30',
            'cpassword' => 'required|min:6|max:30|same:password',
            'phone' => 'required|numeric|phone',

        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;

        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            return redirect()->back()->with('success', 'Added Successfuly');
        } else {
            return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:6|max:30',
        ], [
            'email.exists' => 'This email dosent exist'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->with('failed', 'Incorrect Credentials');
        }
    }
    public function update(Request $request)
    {
        if ($request->ajax()) {
            Admin::find($request->pk)
                ->update([
                    $request->name => $request->value,
                    $request->email => $request->value,
                    $request->phone => $request->value,
                    $request->password => $request->value,
                ]);
            return response()->json(['success' => true]);
        }
    }

    public function empUpdate(Request $request)
    {
        if ($request->ajax()) {
            employee::find($request->pk)
                ->update([
                    $request->name => $request->value,
                    $request->email => $request->value,
                    $request->phone => $request->value,
                    $request->empId => $request->value,
                    $request->password => $request->value,
                ]);

            return response()->json(['success' => true]);
        }
    }
    public function userdUpdate(Request $request)
    {
        if ($request->ajax()) {
            User::find($request->pk)
                ->update([
                    $request->name => $request->value,
                    $request->email => $request->value,
                    $request->phone => $request->value,
                    $request->address => $request->value,
                    $request->englishDegree => $request->value,
                    $request->highSchoolTotalMarks => $request->value,
                    $request->password => $request->value,
                ]);

            return response()->json(['success' => true]);
        }
    }

    public function destroy(Admin $Admin, $id)
    {
        $Admin = Admin::find($id);
        $Admin->delete();
        return redirect()->back()->with('done', "Updated Successfuly");
    }
    public function destroyEmployee(employee $employee, $id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->back()->with('done', "Updated Successfuly");
    }
    public function destroyUser(User $User, $id)
    {
        $User = User::find($id);
        DB::table("users")->where("id", $id)->delete();
        DB::table("questions")->where("userId", $id)->delete();
        DB::table("desires")->where("userId", $id)->delete();
        DB::table("pre_decisions")->where("userId", $id)->delete();
        DB::table("applieddesires")->where("userId", $id)->delete();
        DB::table("final_decisions")->where("userId", $id)->delete();
        $User->delete();
        return redirect()->back()->with('done', "Updated Successfuly");
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
