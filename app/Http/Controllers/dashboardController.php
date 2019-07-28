<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\JobPreference;
use App\User;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function dashboard(){
        // if (Session::has('jobSeeker')) {
           
        // }else{
        //     return view('jobseekers.jobseeker_login')->with('flash_message_error','Please login ');

        // }
            $user = Auth::user()->id;
          
       
        return view('users.dashboard',compact('user'));
    }
}
