<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
    	$credentials = [
    		'nim' => $request->nim,
    		'password' => $request->password,
    	];

        // check credentials
    	if (\Auth::attempt($credentials)) {
            // insert to log
    		return redirect('/dashboard');
    	}else{
            // not match
    		$uname = \app\Models\User::where('nim', $request->nim)->first();
    		$pwd = \app\Models\User::where('password', $request->password)->first();
            return redirect('/login');
    	}
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect()->route('getLogin');
    }
}
