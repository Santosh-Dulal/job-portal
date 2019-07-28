<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\JobPreference;
use Illuminate\Queue\Jobs\Job;

class loginController extends Controller
{
    public function login(Request $request){
      $credentials = $request->only('email','password');
      if (Auth::attempt($credentials)) {
        Session::put('jobSeeker',$request['email']);
       $registeredUserCount = JobPreference::where(['user_id'=>Auth::user()->id])->count();
      
       if ($registeredUserCount == 0) {
          return redirect()->intended('preferences/create')->with('flash_message_success','Please update your profile');
       }else{
          return redirect()->intended('/dashboard');
       }
      }
      
      
       return view('jobseekers.jobseeker_login');
  }
  public function logout(){
  
      Auth::logout();
      //Session::flush();
     
      return redirect('/');
  }
}
