<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
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

            return redirect()->route('createDashboard');
        }

        return redirect()->route('createLogin')->with('error', 'Invalid Credentials.');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('createLogin');
    }
}
