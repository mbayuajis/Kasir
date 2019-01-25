<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    function login(Request $request)
    {
		 // dd(Auth::login(['username' => 'qwerty']));
        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            // Authentication passed...
        	// dd(Auth::user());
            return redirect()->intended('dashboard');
        }
    }

    function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
