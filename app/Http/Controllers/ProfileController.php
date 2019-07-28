<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobPreference;
use Illuminate\Queue\Jobs\Job;
use App\Work_experience;
use App\education;
use App\Training;
use App\Language;
use App\Reference;
use App\Personal_Info;
use App\User;

class ProfileController extends Controller
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
    public function create($id)
    { 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = JobPreference::find($id);
        $exp = Work_experience::find($id);
        $edu = education::find($id);
        $train = Training::findOrfail($id);
        $lang = Language::findOrfail($id);
        $ref = Reference::findOrfail($id);
       $per = Personal_Info::findOrfail($id);
       $user = User::findOrfail($id);
       

        return view('users.show',compact('obj','exp','edu','train','lang','ref','per','user'));
          
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
