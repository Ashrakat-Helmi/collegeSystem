<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;
use App\Models\employee;
use App\Models\PreDecision;
use App\Models\appliedDesires;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    function createEmployee(Request $request)
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
            return view('admin.employees');
        } else {
            return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
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
                    // hash not working :( $request->password => bcrypt($request->value),
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
                    // hash not working :( $request->password => bcrypt($request->value),
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
                    // hash not working :( $request->password => Hash::make($request->value),
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
            ->get();
        return view('dashboard.admin.pages.employees', [
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
            ->get();

        $users23 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->where('status', 'pending')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->get();

        $users24 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->where('status', 'Approved')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->get();

        $users25 = DB::table('users')
            ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
            ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
            ->select('users.*', 'applieddesires.firstDesire', 'applieddesires.secondDesire', 'applieddesires.thirdDesire', 'pre_decisions.status')
            ->where('status', 'Rejected')
            ->orderBy('englishDegree', 'Desc')
            ->orderBy('highSchoolTotalMarks', 'Desc')
            ->get();

        $userstodashboard = User::all(); //fetch all blog userstodashboard from DB
        $userstodashboard = User::orderBy('created_at', 'desc')->limit(4)->get();

        // users counter
        $USERSCOUNTER = DB::table('users')
            ->select(DB::raw('count(*)'))
            ->count();

        return view('dashboard.admin.pages.users', [

            'BIS' => $BIS,
            'FMI' => $FMI,
            'ES'  => $ES,
            'users' => $users,
            'USERSCOUNTER' => $USERSCOUNTER,
            'userstodashboard' => $userstodashboard,
            'users22' => $users22,
            'users23' => $users23,
            'users24' => $users24,
            'users25' => $users25,

        ], compact(
            'BISCOUNTER',
            'BISNAME',
            'FMICOUNTER',
            'FMINAME',
            'ESCOUNTER',
            'ESNAME',
            'users',
            'USERSCOUNTER',
            'userstodashboard',
            'users22',
            'users23',
            'users24',
            'users25',

        )); //returns the view with BIS
    }

    public function totalEmp()
    {
        $employees = employee::all(); //fetch all blog employees from DB
        $employees = employee::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.pages.employees', [
            'employees' => $employees,
        ], compact(
            'employees',
        )); //returns the view with BIS
    }
    public function totalAdmins()
    {
        $admins = Admin::all(); //fetch all blog admins from DB
        $admins = Admin::orderBy('created_at', 'desc')->get();
        return view('dashboard.admin.pages.admins', [
            'admins' => $admins,
        ], compact(
            'admins',
        )); //returns the view with BIS
    }
}
