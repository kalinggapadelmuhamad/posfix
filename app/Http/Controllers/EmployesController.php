<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EmployesController extends Controller
{
    public function createEmployes()
    {
        $dataEmployes = User::all();
        return view('layouts.partials.dashboard.pages.employes._index', [
            'dataEmployes' => $dataEmployes
        ]);
    }

    public function updateEmployes(Request $request)
    {
        $request->validate([
            'uuid'      => 'required',
            'name'      => 'required|string',
            'phone'     => 'required|string|min:12',
            'gender'    => 'required',
            'level'     => 'required',
            'address'   => 'required',
        ]);

        User::where('uuid', $request->input('uuid'))->update([
            'name'      => $request->input('name'),
            'phone'     => $request->input('phone'),
            'address'   => $request->input('address'),
            'gender'    => $request->input('gender'),
            'level'     => $request->input('level')
        ]);

        return redirect()->route('creatEmployes')->with('success', 'The data was updated successfully!');
    }

    public function storeEmployes(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required|string|min:12',
            'email'     => 'required|unique:users',
            'password'  => 'required|string|min:8',
            'gender'    => 'required',
            'level'     => 'required',
            'address'   => 'required',

        ]);

        $uuid = Str::uuid();
        User::create([
            'uuid'      => $uuid,
            'name'      => $request->input('name'),
            'phone'     => $request->input('phone'),
            'email'     => $request->input('email'),
            'password'  => bcrypt($request->input('password')),
            'address'   => $request->input('address'),
            'gender'    => $request->input('gender'),
            'level'     => $request->input('level')
        ]);

        return redirect()->route('creatEmployes')->with('success', 'The data was added successfully');
    }

    public function deleteEmployes($uuid)
    {
        User::where('uuid', $uuid)->delete();
        return redirect()->route('creatEmployes')->with('success', 'The data was deleted successfully');
    }

    public function printEmployes()
    {
        $dataUser = User::all();

        return view('reports.employes');
    }
}
