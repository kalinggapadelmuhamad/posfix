<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function createDashboard()
    {
        return view('layouts.partials.dashboard.pages.home._dashboard');
    }

    public function createProfile()
    {
        return view('layouts.partials.dashboard.pages.profile._index');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'uuid'      => 'required',
            'name'      => 'required',
            'phone'     => 'required|string|min:12',
            'address'   => 'required',
            'gender'    => 'required',
        ]);

        if (!empty($request->input('password'))) {

            $request->validate([
                'password'  => 'required|string|min:8',
            ]);

            User::where('uuid', $request->input('uuid'))->update([
                'name'      => $request->input('name'),
                'phone'     => $request->input('phone'),
                'password'  => bcrypt($request->input('password')),
                'address'   => $request->input('address'),
                'gender'    => $request->input('gender')
            ]);

            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        User::where('uuid', $request->input('uuid'))->update([
            'name'      => $request->input('name'),
            'phone'     => $request->input('phone'),
            'address'   => $request->input('address'),
            'gender'    => $request->input('gender')
        ]);

        return redirect()->route('createProfile')->with('success', 'success profile has been update!');
    }
}
