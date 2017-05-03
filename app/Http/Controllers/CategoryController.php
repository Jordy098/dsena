<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracasts\Flash\Flash;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::orderBy('id','ASC')->paginate(5);
        return view('Admin.Categories.listcategory')->with('categories',$categories); 
    }
    public function create()
    {
        return view('Admin.Categories.category');
    }
    public function store(Request $request)
    {
        $categories=new Category($request->all());
        $categories->save();
        flash('La categoria "'.$categories->name.'" fue agregada')->success();
        return redirect()->route('categories.index');
    }
     public function edit($id)
    {
        $categories=Category::find($id);
        return view('Admin.Categories.edit')->with('categories',$categories);
    }
    public function update(Request $request, $id)
    {
        $category=Category::find($id);
        $category->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $category->save();
        flash('La categoria "'.$category->name.'" fue editada')->warning();
        return redirect()->route('categories.index');
    }
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        Flash::error("La Categoria fue eliminada");
        return redirect()->route('categories.index');
    }
}
