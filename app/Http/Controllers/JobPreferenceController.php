<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\contact;
use App\JobPreference;
use Auth;

class JobPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //pass job categories to dropdown in create page
         $job_categories = DB::table('job_categories')->select('job_category')->get();
        return view('users.preferences.create',compact('job_categories'));
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
           'job_category'=>'required',
           'job_level'=>'required',
           'availability'=>'required',
           'specialization'=>'required',
           'skill'=>'required',
           'expected_salary'=>'required',
           'career_objective'=>'required',
           'location'=>'required'
       ]);
       if ($request->isMethod('post')) {
          $pre = new JobPreference;
          $pre->user_id = Auth::user()->id;
          $pre->job_category = $request->job_category;
          $pre->job_level = $request->job_level;
          $pre->availability = $request->availability;
          $pre->specialization = $request->specialization;
          $pre->skill = $request->skill;
          $pre->expected_salary = $request->expected_salary;
          $pre->career_objective = $request->career_objective;
          $pre->location = $request->location;
          $pre->save();
          return redirect()->intended('personalinfos/create')->with('flash_message_success','Please update your profile');
       }
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
    {  $job_categories =  Db::table('job_categories')->select('job_category')->get();
        $pre['preference'] = JobPreference::findOrfail($id);
        return view('users.preferences.edit')->with($pre)->with(compact('job_categories'));
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
            'job_category'=>'required',
            'job_level'=>'required',
            'availability'=>'required',
            'specialization'=>'required',
            'skill'=>'required',
            'expected_salary'=>'required',
            'career_objective'=>'required',
            'location'=>'required'
        ]);
        $pre = JobPreference::findOrfail($id);
        $pre->job_category = $request->job_category;
        $pre->job_level = $request->job_level;
        $pre->availability = $request->availability;
        $pre->specialization = $request->specialization;
        $pre->skill = $request->skill;
        $pre->expected_salary = $request->expected_salary;
        $pre->career_objective = $request->career_objective;
        $pre->location = $request->location;
        $pre->save();
        return redirect()->back()->with('flash_message_success','Data edited/updated  successfully');
       
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
