<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileEditController extends Controller
{
    public function edit(){
        return view('users.edit_profiles');
    }
}
