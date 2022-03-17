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

use App\Models\Category;
// untuk menampilkan post dengan kategori sama
Route::get('/categories/{category:slug}', function(Category $category){
    return view('article',[
       'title' => $category->name,
       'articles' => $category->articles,
       'category' => $category->name 
    ]);
});
// untuk menampilkan semua category yang ada
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
     ]);
});

use App\Models\User;
// untuk menampilkan post dengan nama author sama
Route::get('/authors/{author:username}', function(User $author){
    return view('article',[
       'title' => $author->name,
       'articles' => $author->articles,
    ]);
});
