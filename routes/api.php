<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('/post', PostController::class);
// Route::get('post', 'PostController@index');

Route::controller(PostController::class)->group(function(){

    Route::get('post', 'index')->name('post.index');

    Route::post('post', 'store')->name('post.store');

    Route::get('post/create', 'create')->name('post.create');

    Route::get('post/{post}', 'show')->name('post.show');

    Route::put('post/{post}', 'update')->name('post.update');

    Route::delete('post/{post}', 'destroy')->name('post.destroy');

    Route::get('post/{post}/edit', 'edit')->name('post.edit');

});
