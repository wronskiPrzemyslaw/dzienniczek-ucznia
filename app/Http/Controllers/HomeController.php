<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::find(auth()->user()->role_id);

        if ($role->name === 'admin') {
            $teachers = User::where('role_id', '=', Role::where('name', '=', Role::ROLE_TEACHER)->first()->id)->get();
            return view('home', compact('teachers'));
        }

        return view('teacher-home');
    }
}
