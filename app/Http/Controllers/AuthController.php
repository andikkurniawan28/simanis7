<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function loginProcess(Request $request){
        $attempt = Auth::attempt([
            'username'  => $request->username,
            'password'  => $request->password,
            'status'    => 1,
        ]);
        if ($attempt){
            $request->session()->regenerate();
            return redirect()->intended();
        }
        else
        {
            return redirect('login')->with('error', 'Username / password wrong.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
