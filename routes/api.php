<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SetController;
use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('sets', SetController::class);

Route::apiResource('themes', ThemeController::class);

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/sets', [SetController::class, 'index']);

Route::get('/themes', [ThemeController::class, 'index']);

Route::get('/search', [SearchController::class, 'search']);


// Route::middleware('auth:api')->group(function () {
//     Route::get('user', function () {
//         return auth()->user();
//     });

//     Route::get('search', [SearchController::class, 'search']);

//     Route::resource('sets', SetController::class)->except(['create', 'edit']);
//     Route::resource('themes', ThemeController::class)->except(['create', 'edit']);
// });

// Route::middleware(['auth:api', 'role:admin'])->group(function () {
//     Route::post('sets', [SetController::class, 'store']);
//     Route::put('sets/{set}', [SetController::class, 'update']);
//     Route::delete('sets/{set}', [SetController::class, 'destroy']);
//     Route::post('themes', [ThemeController::class, 'store']);
//     Route::put('themes/{theme}', [ThemeController::class, 'update']);
//     Route::delete('themes/{theme}', [ThemeController::class, 'destroy']);
// });

use App\Http\Controllers\PostController;

Route::middleware('auth:api')->group(function () {
    Route::get('posts', [PostController::class, 'index']);
    Route::post('posts', [PostController::class, 'store']);
    Route::get('posts/{post}', [PostController::class, 'show']);
    Route::put('posts/{post}', [PostController::class, 'update']);
    Route::delete('posts/{post}', [PostController::class, 'destroy']);
});

