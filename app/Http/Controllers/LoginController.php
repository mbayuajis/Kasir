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
            $currentUser = Auth::user();
            session(['user' => $currentUser]);
            return redirect()->intended('dashboard');
        }else{
            return redirect('login')->with('message', 'Password atau Username Salah!');
        }
    }

    function logout()
    {
        session()->flush();
    	Auth::logout();
    	return redirect('/login');
    }
}
