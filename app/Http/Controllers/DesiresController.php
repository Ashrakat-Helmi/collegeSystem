<?php

namespace App\Http\Controllers;

use App\Models\desires;
use App\Models\FinalDecision;
use App\Models\PreDecision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DesiresController extends Controller
{

    function store(Request $request)
    {
        if (auth()->user()->id) {
            $request->validate([
                'firstDesire' => 'required',
                'secondDesire' => 'required|different:firstDesire,thirdDesire',
                'thirdDesire' => 'required|different:secondDesire,firstDesire',
            ]);

            $desires = new desires();
            $desires->firstDesire = $request->firstDesire;
            $desires->secondDesire = $request->secondDesire;
            $desires->thirdDesire = $request->thirdDesire;
            $desires->userId = auth()->user()->id;
            $save = $desires->save();

            $applieddesires = [
                'firstDesire' => $request->firstDesire,
                'secondDesire' => $request->secondDesire,
                'thirdDesire' => $request->thirdDesire,
                'userId' => auth()->user()->id,
                'studentName' => auth()->user()->name,
            ];
            DB::table('applieddesires')->insert($applieddesires);
            DB::commit();

            $predecision = [
                'id' => auth()->user()->id,
                'userId' => auth()->user()->id,
                'status' => $request->status = 'pending',
            ];
            DB::table('pre_decisions')->insert($predecision);
            DB::commit();


            $finaldecision = FinalDecision::join('pre_decisions', 'final_decisions.preDecisionId', '=', 'pre_decisions.id')
                ->get(['final_decisions.*', 'pre_decisions.id']);


            $finaldecision = [
                'userId' => auth()->user()->id,
                'preDecisionId' => auth()->user()->id,
                'programId' => $request->firstDesire,
                'status' => $request->status = 'pending',
            ];
            DB::table('final_decisions')->insert($finaldecision);
            DB::commit();

            if ($save) {
                return redirect('desires')->with('success', 'You registered successfully');
            } else {
                return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
            }
        }
    }

    public function index()
    {
        if (Auth::guard('web')->check()) {
            $predecision = PreDecision::all(); //fetch all blog posts from DB
            $userId = auth()->user()->id;
            $ESNAME = PreDecision::select('status')->where('userid', $userId)->get();
            $desires = desires::where('userid', '=', $userId)->get();

            $users = DB::table('users')
                ->join('applieddesires', 'users.id', '=', 'applieddesires.userId')
                ->join('pre_decisions', 'users.id', '=', 'pre_decisions.userId')
                ->select('users.englishDegree', 'users.highSchoolTotalMarks', 'applieddesires.*',  'pre_decisions.status')
                ->get();
            $drives = user::where('id', '=', $userId)->get();

            $users2 = User::where('id', $userId)->first();
            $rsltActualPrice = round(($users2->englishDegree / $users2->highSchoolTotalMarks) * 100, 2);
            return view('desires.index', [
                'pre_decision' => $predecision,
                'users' => $users,
                'users2' => $users2,
                'drives' => $drives,
            ], compact('ESNAME', 'users', 'users2', 'drives', 'rsltActualPrice'))->with('desires', $desires);
        } else {
            return view('dashboard.employee.registered-students');
        }
        //returns the view with posts




        //$userId = auth()->user()->id;
        //$desires = desires::where('userid', '=', $userId)->get();
        //return view('desires.index')->with('desires', $desires);
    }


    public function create(Request $request)
    {
        $Programs = Programs::all(); //fetch all blog posts from DB
        $userId = auth()->user()->id;

        $desires = desires::where('userid', '=', $userId)->get();

        $checker = desires::where('userId', auth()->user()->id)->first();
        if ($checker === null) {
            return view('desires.create')->with('Programs', $Programs, 'checker', $checker);
        } else {
            return redirect()->route('desires.index')->with('desires', $desires);
        }




        //$items = array(
        //'itemlist' =>  DB::table('programs')->get()
        // );;
        // return view('desires.create', $items);
    }

    public function show($id)
    {
        $desires = desires::find($id);
        return view('desires.show')->with('desires', $desires);
    }

    public function edit($id)
    {
        $desires = desires::find($id);
        return view('desires.edit')->with('desires', $desires);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(desires $desires)
    {
        //
    }
}
