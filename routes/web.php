<?php
use app\Http\Controllers\BookController;
use app\Http\Controllers\postController;

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

Route::resource('/books', 'App\Http\Controllers\BookController' );

Route::get('/postagens', [App\Http\Controllers\postController::class, 'create']);
Route::post('/post', [App\Http\Controllers\postController::class, 'store']);
Route::post('/comentarios', [App\Http\Controllers\postController::class, 'store']);
Route::delete('/delete/{id}',  [App\Http\Controllers\postController::class, 'destroy'] );
   

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
