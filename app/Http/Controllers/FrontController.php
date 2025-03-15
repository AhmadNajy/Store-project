<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $categores = Category::all();
        $products = Product::all();
        return view('home.index' , compact('products' , 'categores'));
    }
    public function selectCaregory(Request $request) {
            $categores = Category::all();
              if($request->selected_category != 'All'){
                $products = DB::table('products')->where('category' , $request->selected_category)->get();
              }else{
                $products = Product::all();
              }
              return view('home.index' , compact('categores','products'));
        }
}
