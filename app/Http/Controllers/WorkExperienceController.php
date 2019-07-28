<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Work_experience;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
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
        $offices = DB::table('job_categories')->select('job_category')->get();
        return view('users.work_experiences.create',compact('offices'));
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
            'office_name'=>'required|string|min:3',
            'office_type'=>'required|string|',
            'office_location'=>'required|string|min:3',
            'job_title'=>'required|string',
            'job_level'=>'required|string',
            'start'=>'required|date',
            'end'=>'required|date',
            'duty_resp'=>'required|string|min:20'
        ]);

        $experience = new Work_experience;
        $experience->user_id = Auth::user()->id;
        $experience->office_name = $request['office_name'];
        $experience->office_type = $request['office_type'];
        $experience->office_location = $request['office_location'];
        $experience->job_title = $request['job_title'];
        $experience->job_level = $request['job_level'];
        $experience->start = $request['start'];
        $experience->end = $request['end'];
        $experience->duty_resp = $request['duty_resp'];
        $experience->save();
        return redirect()->intended('languages/create')->with('flash_message_success','Please update your profile');
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
        //
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
        //
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
