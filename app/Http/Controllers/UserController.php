<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Word;
use Laracasts\Flash\Flash;

class UserController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $words=Word::all();
    	return view('User.index',compact('categories','words'));
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
        return view('User.register');
    }
     public function edit($id)
    {
        $users=User::find($id);
        return view('User.edit')->with('users',$users);
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
         return redirect()->route('users.edit',$users->id);
    }
}
