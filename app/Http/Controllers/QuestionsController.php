<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $userId = auth()->user()->id;
            $questions = Questions::where('userid', '=', $userId)->get();
            return view('questions.index')->with('questions', $questions);
        } elseif (Auth::guard('admin')->check()) {
            $questions = Questions::all(); //fetch all blog questions from DB
            $questions = Questions::orderBy('created_at', 'desc')->limit(10)->get();
            return view('questions.index', [
                'questions' => $questions,
            ]); //returns the view with questions
        } elseif (Auth::guard('employee')->check()) {
            $questions = Questions::all(); //fetch all blog questions from DB
            $questions = Questions::orderBy('created_at', 'desc')->limit(10)->get();
            return view('questions.index', [
                'questions' => $questions,
            ]); //returns the view with questions
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->id) {
            $request->validate([
                'question' => 'required',
            ]);

            $questions = new Questions();
            $questions->question = $request->question;
            $questions->answer = $request->answer = 'Please wait for our response.';
            $questions->userId = auth()->user()->id;
            $save = $questions->save();

            if ($save) {
                return redirect('questions')->with('success', 'You registered successfully');
            } else {
                return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
            }
        }
    }


    public function show($id)
    {
        $questions = Questions::find($id);
        return view('questions.show')->with('questions', $questions);
    }

    public function edit($id)
    {
        $questions = Questions::find($id);
        return view('questions.edit')->with('questions', $questions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::guard('web')->check()) {
            if (auth()->user()->id) {
                $request->validate([
                    'question' => 'required',
                ]);

                $questions = Questions::find($id);
                $questions->question = $request->question;
                $save = $questions->save();

                if ($save) {
                    return redirect('questions')->with('success', 'You registered successfully');
                } else {
                    return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
                }
            }
        }
        if (Auth::guard('employee')->check()) {
            $questions = Questions::find($id);
            $questions->question = $request->question;
            $questions->answer = $request->answer;
            $save = $questions->save();

            if ($save) {
                return redirect('questions')->with('success', 'You registered successfully');
            } else {
                return redirect()->back()->with('failed', 'Something went wrong, Failed to register');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(questions $questions, $id)
    {
        $questions = Questions::find($id);
        $questions->delete();
        return redirect('questions')->with('done', "Deleted Successfuly");
    }
}
