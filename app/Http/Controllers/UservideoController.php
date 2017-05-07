<?php

namespace App\Http\Controllers;
use App\User;
use App\Word;
use App\Video;
use App\Region;
use App\State;
use App\Category;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class UservideoController extends Controller
{
    public function create()
    {
        $words=Word::all();
        $regions=Region::all();
        $states=State::all();
        $users=User::all();
        $categories=Category::all();
        return view('User/createvideo',compact('words','regions','states','users','categories'));
    }
    public function store(Request $request)
    {
        $videos=new Video($request->all());
        $videos->state_id=1;
        //$categoria->nombre=$request->nombre;
        $videos->save();
        flash('El video fue agregado')->success();
        return redirect()->route('video.create');
    }
    public function getenvio(Request $request, $id)
    {
        $word=Word::find($id);
        $videos=Video::all();
        foreach ($videos as $video) {
            if($video->word_id==$word->id)
            {
                $videoname=$video->url;
                $split=explode('watch?v=', $videoname);
                return $split[1];
            }
        }
        $mensaje="genial esta funcionando ".$id;
        
        return redirect()->route('users.index');
    }
}
