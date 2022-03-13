<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\desires;
use App\Models\appliedDesires;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppliedDesiresController extends Controller
{


    public function index()
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

        return view('appliedStudents', [

            'BIS' => $BIS,
            'FMI' => $FMI,
            'ES'  => $ES,
            'users' => $users

        ], compact('BISCOUNTER', 'BISNAME', 'FMICOUNTER', 'FMINAME', 'ESCOUNTER', 'ESNAME', 'users')); //returns the view with BIS
    }
}
