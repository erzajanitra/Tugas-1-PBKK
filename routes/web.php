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
