<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    function login(){
        return view("admin.login");

    }
    function loginCheck(Request $r){
        // $data = $r->except("_token");

        $credentials = $r->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();

            return redirect()->intended('admin/category');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
}
