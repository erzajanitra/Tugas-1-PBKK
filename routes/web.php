<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//validation
use App\Http\Controllers\FormController;
// page input form
Route::get('/input', [FormController::class, 'input']); 
// page setelah input form
Route::post('/proses', [FormController::class, 'proses']);

//route untuk artikel
use App\Http\Controllers\ArticleController;
Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

// route untuk category
use App\Models\Category;
Route::get('/categories/{category:slug}', function(Category $category){
    return view('article',[
       'title' => $category->name,
       'articles' => $category->articles,
       'category' => $category->name 
    ]);
});
// untuk menampilkan semua category yg ada
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
     ]);
});