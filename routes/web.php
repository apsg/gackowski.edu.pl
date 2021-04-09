<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImagesController;
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

Route::post('/contact', [ContactController::class, 'send']);

Route::get('/{section}', function ($section) {
    return view('welcome')->with(compact('section'));
});

// Wordpress legacy route
Route::get('/blog/{year}/{month}/{day}/{slug}', [BlogController::class, 'redirect']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

Route::get('/a/blog', [BlogController::class, 'index']);
Route::get('/a/blog/{slug}', [BlogController::class, 'single']);

Route::get('/a/images', [ImagesController::class, 'index']);
