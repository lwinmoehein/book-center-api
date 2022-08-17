<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WantToReadController;

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

Route::post('/sanctum/token', TokenController::class);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users/auth', AuthController::class);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::get('/users', [UserController::class, 'index']);

    Route::post('/users/auth/avatar', [AvatarController::class, 'store']);

    Route::post('/messages', [MessageController::class, 'store']);
    Route::get('/messages', [MessageController::class, 'index']);

    Route::get('/books', [BookController::class, 'index']);
    Route::get('/books/{book}', [BookController::class, 'show']);


    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);
    Route::get('/categorie-detail/{category}', [CategoryController::class, 'getBooks']);


    Route::resource('/languages', LanguageController::class);
    Route::get('/authors', [AuthorController::class, 'index']);

    Route::post('/users/category', [UserController::class, 'updateCategories']);
    Route::get('/user-categories', [UserController::class, 'categories']);
    Route::get('/recommended-books', [BookController::class, 'forYou']);

    Route::get('/reviews', [ReviewController::class, 'index']);
    Route::post('/reviews', [ReviewController::class, 'store']);
    Route::patch('/reviews/{review}', [ReviewController::class, 'update']);
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);

    Route::post('/want-to-reads', [WantToReadController::class, 'store']);
    Route::get('/want-to-reads', [WantToReadController::class, 'index']);
    Route::get('/want-to-reads/{book}', [WantToReadController::class, 'show']);
    Route::post('/want-to-reads/sync', [WantToReadController::class, 'sync']);
    Route::delete('/want-to-reads/{book}', [WantToReadController::class, 'destroy']);
});
