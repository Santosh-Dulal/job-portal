<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferenceController extends Controller
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
        return view('users.references.create');
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
            'name'=>'required|string|min:3',
            'office'=>'required|string|min:2',
            'post'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|min:7'
        ]);

        $ref = new Reference;
        $ref->user_id = Auth::user()->id;
        $ref->name = $request['name'];
        $ref->office = $request['office'];
        $ref->post = $request['post'];
        $ref->email = $request['email'];
        $ref->phone = $request['phone'];
        $ref->save();
        return redirect()->back()->with('flash_message_success','Reference information saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ref = Reference::findOrfail($id);
        return view('users.references.edit',compact('ref'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|string|min:3',
            'office'=>'required|string|min:2',
            'post'=>'required|string',
            'email'=>'required|string',
            'phone'=>'required|min:7'
        ]);

        $ref = Reference::findOrfail($id);
        $ref->user_id = Auth::user()->id;
        $ref->name = $request['name'];
        $ref->office = $request['office'];
        $ref->post = $request['post'];
        $ref->email = $request['email'];
        $ref->phone = $request['phone'];
        $ref->save();
        return redirect()->intended('profiles/show')->with('flash_message_success','Your profile is complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        //
    }
}
