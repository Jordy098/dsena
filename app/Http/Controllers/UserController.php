<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('Template.index');
    }
    public function create()
    {
        return view('User.register');
    }
    public function store(Request $request)
    {
        $users=new User($request->all());
        $users->password=bcrypt($request->password);
        $users->save();
        flash('El usuario "'.$users->name.'" fue creado')->success();
        return redirect()->route('users.index');
    }
}
