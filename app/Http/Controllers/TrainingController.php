<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
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
        return view('users.trainings.create');
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
            'course'=>'required|string',
            'institute'=>'required|string',
            'months'=>'required|string',
            'year'=>'required'
        ]);
        $train = new Training;
        $train->user_id = Auth::user()->id;
        $train->course = $request['course'];
        $train->institute = $request['institute'];
        $train->months = $request['months'];
        $train->year = $request['year'];
        $train->save();
        return redirect()->intended('experiences/create')->with('flash_message_success','Please update your profile');    }

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
        $train = Training::findOrfail($id);
       return view('users.trainings.edit',compact('train'));
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
            'course'=>'required|string',
            'institute'=>'required|string',
            'months'=>'required|string',
            'year'=>'required'
        ]);
        $train = Training::findOrfail($id);
        $train->course = $request['course'];
        $train->institute = $request['institute'];
        $train->months = $request['months'];
        $train->year = $request['year'];
        $train->save();
        return redirect()->back()->with('flash_message_success','Training Infromation updated successfully');

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
