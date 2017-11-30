<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;

class TeacherController extends Controller
{
    public function add()
    {
        $teacher = new User();
        $teacher->firstName = request('firstName');
        $teacher->lastName = request('lastName');
        $teacher->email = request('email');
        $teacher->password = bcrypt(request('password'));
        $teacher->role_id = Role::where('name', '=', Role::ROLE_TEACHER)->first()->id;

        $teacher->save();

        return back();
    }
}
