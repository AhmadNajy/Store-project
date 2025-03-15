<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $datafromDB = Category::all();
        return view ('admin.categories.index' , compact('datafromDB'));
    }

    public function create(Request $request){
        $valedated = $request->validate([
            'name' => 'required | max:10'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->back();
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $row = Category::find($id);
        return view('admin.categories.update' , compact('row'));
    }

    public function update(Request $request , $id){

        $category = Category::find($id);
        $category->name =$request->name; ;
        $category->save();

        return  redirect('categores');
    }
}
