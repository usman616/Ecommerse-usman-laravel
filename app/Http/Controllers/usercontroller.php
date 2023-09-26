<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    function login(Request $request)
    {
        $userdata= User::where(['email'=>$request->email])->first();
        if(!$userdata || !Hash::check($request->password,$userdata->password))
        {
            return "Username or password not matched .";
        }
        else{
            $request->session()->put('userdata',$userdata);
            return redirect('/');
        }
    }
}
