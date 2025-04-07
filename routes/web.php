<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('addCategory', function () {
    return view('admin.categories.create');
});

// start product Routes
Route::get ('products' , [ProductController::class,'index']);
Route::get ('add' , [ProductController::class,'add']);
Route::post('AddProduct' , [ProductController::class , 'create']);
Route::get('delet/{id}' , [ProductController::class , 'delete']);
Route::get('edit/{id}' , [ProductController::class , 'edit']);
Route::patch('update/{id}' , [ProductController::class , 'update']);
// end product Routes

// start category Routes
Route::get ('categores' , [CategoryController::class,'index']);
Route::post('AddCategory' , [CategoryController::class , 'create']);
Route::get('deletCategory/{id}' , [CategoryController::class , 'delete']);
Route::get('editCategory/{id}' , [CategoryController::class , 'edit']);
Route::patch('updateCategory/{id}' , [CategoryController::class , 'update']);
// end category Routes

// start home routes
Route::get('/',[FrontController::class , 'index']);
Route::patch('selectCaregory',[FrontController::class , 'selectCaregory']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
