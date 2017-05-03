<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Word;
use App\Region;
use App\State;
use App\User;
use Laracasts\Flash\Flash;

class VideoController extends Controller
{
    public function index()
    {
        $videos=Video::orderBy('id','ASC')->paginate(5);
        $words=Word::all();
        $regions=Region::all();
        $states=State::all();
        $users=User::all();
        return view('Admin/Videos/listvideo',compact('words','regions','states','videos','users'));
    }
    public function create()
    {
        $words=Word::all();
        $regions=Region::all();
        $states=State::all();
        $users=User::all();
        return view('Admin/Videos/video',compact('words','regions','states','users'));
    }
    public function store(Request $request)
    {
        $videos=new Video($request->all());
        $videos->save();
        flash('El video fue agregado')->success();
        return redirect()->route('videos.index');
    }
     public function edit($id)
    {
        $videos=Video::find($id);
        $words=Word::all();
        $regions=Region::all();
        $states=State::all();
        $users=User::all();
        return view('Admin.Videos.edit',compact('words','regions','states','users','videos'));
    }
    public function update(Request $request, $id)
    {
        $video=Video::find($id);
        $video->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $video->save();
        flash('El video fue editado')->warning();
        return redirect()->route('videos.index');
    }
}
