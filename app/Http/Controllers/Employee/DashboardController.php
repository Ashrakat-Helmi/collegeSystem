<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\FinalDecision;
use App\Models\PreDecision;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function approve(Request $request, $userId)
    {
        $data = PreDecision::where('userId', '=', $userId)->first();
        $data->status = $request->status = 'Approved';
        DB::table('final_decisions')
            ->update(['status' => 'Approved']);
        $data->save();

        return redirect()->back()->with('done', "Updated Successfuly");
    }



    public function reject(Request $request, $userId)
    {
        $data = PreDecision::where('userId', '=', $userId)->first();
        $data->status = $request->status = 'Rejected';
        DB::table('final_decisions')
            ->update(['status' => 'Rejected']);
        $data->save();
        return redirect()->back()->with('done', "Updated Successfuly");
    }

    public function registered()
    {
        $users = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->limit(5)
            ->get();
        return view('dashboard.employee.registered-students', [
            'users' => $users,
        ]); //returns the view with posts
    }
    public function index()
    {
        $users = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->limit(5)
            ->get();
        return view('dashboard.employee.home', [
            'users' => $users,
        ]); //returns the view with posts


        //$users = User::all();
        //dd($users);
        //$users = User::orderBy('englishDegree', 'Desc')
        //     ->orderBy('highSchoolTotalMarks', 'Desc')
        //    ->limit(5)->get();
        //return view('dashboard.employee.home', [
        //     'users' => $users,
        // ]); //returns the view with posts

        //return $users->all();
        //return view('dashboard.employee.registered-students', compact('users'));
    }
}
