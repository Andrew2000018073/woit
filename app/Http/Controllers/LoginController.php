<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function contoh(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
}
