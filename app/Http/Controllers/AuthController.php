<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('loginPage.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     =>  'required|string',
            'password'  =>  'required|string',
        ]);

        if (Auth::attempt($credentials)) {

            return redirect()->route('dashboardHome');
        }

        return redirect()->route('loginPage')->with('error', 'Invalid Credentials.');
    }
}
