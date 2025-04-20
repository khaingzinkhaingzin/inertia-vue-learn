<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/users", [UserController::class, 'index'])->name('user.index');
Route::inertia("/users/create", 'User/CreateForm')->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{id}', [UserController::class, 'show']);

Route::post('/post-test', function () {
    dd(request());
});