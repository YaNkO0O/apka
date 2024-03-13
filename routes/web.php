<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    $Posts = [];
    if (auth()->check()) {
        $Posts = auth()->user()->usersPosts()->latest()->get();
    }
    return view('home', ['posts' => $Posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/CreatePost', [PostController::class, 'CreatePost']);
Route::get('/EditPost/{post}', [PostController::class, 'ShowEditScreen']);
