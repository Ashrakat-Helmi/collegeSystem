<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Illuminate\Http\Request;
use App\Models\desires;
use App\Http\Controllers\DesiresController;

class ProgramsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $Programs = Programs::all(); //fetch all blog posts from DB
       // return view('desires.create', [
          //  'Programs' => $Programs,
       // ]); //returns the view with posts

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programs  $Programs
     * @return \Illuminate\Http\Response
     */
    public function show(Programs $Programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programs  $Programs
     * @return \Illuminate\Http\Response
     */
    public function edit(Programs $Programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programs  $Programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programs $Programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programs  $Programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programs $Programs)
    {
        //
    }
}
