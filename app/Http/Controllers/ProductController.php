<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $datafromDB = DB::table('tasks')->get();
        $datafromDB = Product::all();
        return view ('admin.products.index' , compact('datafromDB'));
    }
    public  function add () {
        $categores = Category::all();
        return view('admin.products.create' , compact('categores'));
    }


    public function create(Request $request){
        // $taskname = $_POST['name'];
        // DB::table('tasks')->insert(['name' => $taskname]);
        $valedated = $request->validate([
            'name' => 'required | max:10'
        ]);
        $proName = $request->name;
        $proCategory = $request->category;
        $proPrice = $request->price;
        $proQuantity = $request->quantity;
        $description = $request->description;

        $product = new Product;
        $product->name = $proName;
        $product->category = $proCategory;
        $product->price = $proPrice;
        $product->quantity = $proQuantity;
        $product->description = $description;
        $product->save();

        return redirect()->back();
    }

    public function delete($id){
        // DB::table('tasks')->where('id' , $id)->delete();
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $row = Product::find($id);
        $categores = Category::all();
        $categoryName = (Category::find($row->category))->name;
        return view('admin.products.update' , compact('row' , 'categores' ,'categoryName'));
    }

    public function update(Request $request , $id){

        $product = Product::find($id);
        $product->name =$request->name; ;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();

        return  redirect('products');
    }
}
