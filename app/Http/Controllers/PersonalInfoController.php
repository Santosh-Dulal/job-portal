<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;

use Illuminate\Http\Request;
use App\Personal_Info;

class PersonalInfoController extends Controller
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
        $countries = DB::table('countries')->select('country_name')->get();
        
       $names = DB::table('users')->select('first_name','last_name')->first();
        
       
        return view('users.personal_infos.create')->with(compact('names','countries'));
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
            'current_address'=>'required|min:3',
            'permanent_address'=>'required|min:3',
            'dob'=>'required|date',
            'gender'=>'required',
            'marital_status'=>'required|',
            'nationality'=>'required|'
           
        ]);
        $info = new Personal_Info;
        $info->user_id = Auth::user()->id;
        $info->current_address = $request['current_address'];
        $info->permanent_address = $request['permanent_address'];
        $info->dob = $request['dob'];
        $info->gender = $request['gender'];
        $info->marital_status = $request['marital_status'];
        $info->nationality = $request['nationality'];
        $info->save();
        return redirect()->intended('educations/create')->with('flash_message_success','Please update your profile');

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
        $info = Personal_Info::findOrfail($id);   
       
        $countries = DB::table('countries')->select('country_name')->get();
        
        $names = DB::table('users')->select('first_name','last_name')->first();
         
        return view('users.personal_infos.edit',compact('info','countries','names'));
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
            'current_address'=>'required|min:3',
            'permanent_address'=>'required|min:3',
            'dob'=>'required|date',
            'gender'=>'required',
            'marital_status'=>'required|',
            'nationality'=>'required|'
           
        ]);
        $info = Personal_Info::findOrfail($id);
        $info->current_address = $request['current_address'];
        $info->permanent_address = $request['permanent_address'];
        $info->dob = $request['dob'];
        $info->gender = $request['gender'];
        $info->marital_status = $request['marital_status'];
        $info->nationality = $request['nationality'];
        $info->save();
        return redirect()->back()->with('flash_message_success','Personal information edited successfully.');

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
