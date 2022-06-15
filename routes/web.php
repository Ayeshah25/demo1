<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, "index"]);
//open insert page 
Route::get('/new-post', [PostController::class, "create"])->name("new");
//insert query route, it will send user to "STORE" function in controller
Route::post('/save-post', [PostController::class, "store"])->name("added");
Route::get('edit-post/{id}', [PostController::class, "edit"]);
Route::put('/update-post/{id}', [PostController::class, "update"])->name("updated");
Route::delete('del-post/{id}', [PostController::class, "del"]);