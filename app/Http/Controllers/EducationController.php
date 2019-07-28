<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\education;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'degree'=>'required|string|min:2',
            'program'=>'required|string',
            'board'=>'required|string',
            'institution'=>'required|string',
            'system'=>'required',
            'grade'=>'required',
            'year'=>'required'
            
        ]);

        $edu = new education;
       $edu->user_id = Auth::user()->id;
        $edu->degree = $request['degree'];
        $edu->program = $request['program']; 
        $edu->board = $request['board'];
        $edu->institution = $request['institution'];
        $edu->system = $request['system'];
        $edu->grade = $request['grade'];
        $edu->year = $request['year'];
        $edu->save();
        return redirect()->intended('trainings/create')->with('flash_message_success','Please update your profile');
    }

    /**
  
    * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edu = education::findOrfail($id);
        return view('users.educations.edit',compact('edu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'degree'=>'required|string|min:2',
            'program'=>'required|string',
            'board'=>'required|string',
            'institution'=>'required|string',
            'system'=>'required',
            'grade'=>'required',
            'year'=>'required'
            
        ]);

        $edu = new education;
        $edu->user_id = Auth::user()->id;

        $edu->degree = $request['degree'];
        $edu->program = $request['program']; 
        $edu->board = $request['board'];
        $edu->institution = $request['institution'];
        $edu->system = $request['system'];
        $edu->grade = $request['grade'];
        $edu->year = $request['year'];
        $edu->save();
        return redirect()->back()->with('flash_message_success','Educational information edited successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
