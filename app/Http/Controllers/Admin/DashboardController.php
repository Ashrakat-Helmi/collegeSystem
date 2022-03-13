<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\PreDecision;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\appliedDesires;
use App\Models\employee;
use App\Models\User;

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
        return view('dashboard.admin.home', [
            'users' => $users,
        ]); //returns the view with posts
    }


    public function totalAll()
    {
        $BIS = appliedDesires::all(); //fetch all blog BIS from DB
        $FMI = appliedDesires::all(); //fetch all blog BIS from DB
        $ES = appliedDesires::all(); //fetch all blog BIS from DB

        //  $BIS = appliedDesires::where('firstDesire', 'BIS')->count();
        //  $FMI = appliedDesires::where('firstDesire', 'FMI')->count();
        //  $ES = appliedDesires::where('firstDesire', 'ES')->count();

        $BISCOUNTER = DB::table('applieddesires')
            ->select(DB::raw('count(*) as user_count, firstDesire'))
            ->where('firstDesire', 'BIS')
            ->groupBy('firstDesire')
            ->count();

        // student name
        $BISNAME = appliedDesires::select('studentName')->where('firstDesire', 'BIS')->get();

        // FMI
        $FMICOUNTER = DB::table('applieddesires')
            ->select(DB::raw('count(*) as user_count, firstDesire'))
            ->where('firstDesire', 'FMI')
            ->groupBy('firstDesire')
            ->count();

        // student name
        $FMINAME = appliedDesires::select('studentName')->where('firstDesire', 'FMI')->get();

        // ES
        $ESCOUNTER = DB::table('applieddesires')
            ->select(DB::raw('count(*) as user_count, firstDesire'))
            ->where('firstDesire', 'ES')
            ->groupBy('firstDesire')
            ->count();

        // student name
        $ESNAME = appliedDesires::select('studentName')->where('firstDesire', 'ES')->get();

        $users = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.*',  'pre_decisions.status')
            ->groupBy('englishDegree')
            ->get();

        $users22 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->limit(5)
            ->get();

        $users23 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->where('status', 'pending')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->limit(5)
            ->get();

        $users24 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->where('status', 'Approved')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->limit(5)
            ->get();

        $users25 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->where('status', 'Rejected')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->limit(5)
            ->get();


        $users26 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->orderBy('englishDegree', 'Desc')
            ->limit(5)
            ->get();

        $admins = Admin::all(); //fetch all blog admins from DB
        $admins = Admin::orderBy('created_at', 'desc')->get();

        $employees = employee::all(); //fetch all blog employees from DB
        $employees = employee::orderBy('created_at', 'desc')->get();

        $userstodashboard = User::all(); //fetch all blog userstodashboard from DB
        $userstodashboard = User::orderBy('created_at', 'desc')->get();

        // users counter
        $USERSCOUNTER = DB::table('users')
            ->select(DB::raw('count(*)'))
            ->count();
        // employees counter
        $employeesCOUNTER = DB::table('employees')
            ->select(DB::raw('count(*)'))
            ->count();
        // admins counter
        $adminsCOUNTER = DB::table('admins')
            ->select(DB::raw('count(*)'))
            ->count();
        // questions counter
        $QuestionsCOUNTER = DB::table('questions')
            ->select(DB::raw('count(*)'))
            ->count();
        // news counter
        $newsCOUNTER = DB::table('news')
            ->select(DB::raw('count(*)'))
            ->count();

        return view('dashboard.admin.home', [

            'BIS' => $BIS,
            'FMI' => $FMI,
            'ES'  => $ES,
            'users' => $users,
            'USERSCOUNTER' => $USERSCOUNTER,
            'adminsCOUNTER' => $adminsCOUNTER,
            'employeesCOUNTER' => $employeesCOUNTER,
            'QuestionsCOUNTER' => $QuestionsCOUNTER,
            'newsCOUNTER' => $newsCOUNTER,
            'admins' => $admins,
            'employees' => $employees,
            'userstodashboard' => $userstodashboard,
            'users22' => $users22,
            'users23' => $users23,
            'users24' => $users24,
            'users25' => $users25,
            'users26' => $users26,
        ], compact(
            'BISCOUNTER',
            'BISNAME',
            'FMICOUNTER',
            'FMINAME',
            'ESCOUNTER',
            'ESNAME',
            'users',
            'USERSCOUNTER',
            'QuestionsCOUNTER',
            'employeesCOUNTER',
            'adminsCOUNTER',
            'newsCOUNTER',
            'admins',
            'employees',
            'userstodashboard',
            'users22',
            'users23',
            'users24',
            'users25',
            'users26',
        )); //returns the view with BIS
    }
}
