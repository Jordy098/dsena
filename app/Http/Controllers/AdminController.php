<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;

class AdminController extends Controller
{
    public function index()
    {
    	return view('Admin.index');
    }
     public function edit($id)
    {
        $users=User::find($id);
        return view('Admin.editAdmin')->with('users',$users);
    }
    public function update(Request $request, $id)
    {
        $users=User::find($id);
        //$users->fill($request->all());
        $users->name=$request->name;
        $users->nickname=$request->nickname;
        $users->email=$request->email;
        if($users->password==$request->password){$users->password=$request->password;}
        else{$users->password=bcrypt($request->password);}
        $users->save();
        flash('El administrador "'.$users->name.'" fue editado')->warning();
         return redirect()->route('admins.index');
    }
}
