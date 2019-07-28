<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Regjobseeker;
use App\User;
use DB;

class JobSeekerRegisterController extends Controller
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
    {
        return view('jobseekers.jobseeker_sign_up');
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
            'first_name'=>'required|min:3',
            'last_name'=>'required',
            'phone'=>'required|min:7|max:10',
            'email'=>'required|email|unique:jobseekers_registrations',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|same:password'
           
        ]);
               $userCount =  User::where('email',$request->email)->count();

               if($userCount>0){
                  
                   return redirect()->back()->with('flash_message_error','Email already taken.Use different email.');
               }else{
                $jobseeker = new User;
                $jobseeker->first_name = $request->first_name;
                $jobseeker->last_name = $request->last_name;
                $jobseeker->phone = $request->phone;
                $jobseeker->email = $request->email;
                $jobseeker->password = Hash::make($request->password);
                $jobseeker->save();
                return redirect()->action('loginController@login')->with('flash_message_success','Please see your email to verify.');
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
    {
        
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
