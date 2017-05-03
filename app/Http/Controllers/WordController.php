<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Word;
use App\Category;

class WordController extends Controller
{
    public function index(){
    	$words=Word::orderBy('id','ASC')->paginate(5);
    	$categories=Category::all();
        return view('Admin/Words/listword',compact('words','categories'));
    }
    public function create(){
    	$categories=Category::all();
        return view('Admin/Words/word')->with('categories',$categories);
    }
    public function store(Request $request)
    {
        $words=new Word($request->all());
        $words->save();
        flash('La palabra "'.$words->name.'" fue agregada')->success();
        return redirect()->route('words.index');
    }
    public function edit($id)
    {
        $words=Word::find($id);
        $categories=Category::all();
        return view('Admin.Words.edit',compact('words','categories'));
    }
    public function update(Request $request, $id)
    {
        $word=Word::find($id);
        $word->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $word->save();
        flash('La palabra "'.$word->name.'" fue editada')->warning();
        return redirect()->route('words.index');
    }
    public function destroy($id)
    {
    	$words=Word::find($id);
    	$words->delete();
    	Flash::error("La palabra fue eliminada");
    	return redirect()->route('words.index');
    }
}
