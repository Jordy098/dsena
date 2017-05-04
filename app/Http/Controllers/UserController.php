<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

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
        return view('auth/login');
    }
     public function edit($id)
    {
        $users=User::find($id);
        return view('Admin.editAdmin')->with('users',$users);
    }
    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $users->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $users->save();
        flash('El administrador "'.$users->name.'" fue editado')->warning();
         return view('/admin');
    }
}
