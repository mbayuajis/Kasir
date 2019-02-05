<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

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

    function gantpass(Request $request)
    {
        $rules = [
            'pass_baru' => 'required|min:8|confirmed',
            'pass_lama' => 'required',
        ];
        $message = [
            'required' => ':attribute harus diisi!',
            'min'  => ':attribute diisi minimal :min karakter!',
            'confirmed' => ':attribute tidak sama!',
        ];

        Validator::make($request->all(), $rules, $message)->validate();

        $password = Hash::make($request->pass_baru);

        if (Hash::check($request->pass_lama, Auth::user()->password)){
            Auth::user()->update([
                'password' => $password
            ]);
            return redirect('/dashboard')->with('message', 'Berhasil mengubah password!');
        } else {
            return redirect('/dashboard')->with('wrong', 'Password lama anda salah!');
        }
    }
}
