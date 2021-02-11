<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;



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

Route::get('/', function () { return view('index'); });

Route::get('/blogs-suggested', function () { return view('blogs-suggested'); });

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::post('/posts/comments', [CommentsController::class, 'store']);
Route::get('/posts/{post}',[PostsController::class, 'show'])->name('posts.show');
Route::post('/posts', function () {
	App\Models\Gist::create(request(['title', 'description', 'body', 'slug']));
});

Route::get('/gists', function () {
$gists = App\Models\Gist::all();
	return view('gists.index', compact('gists'));
});
Route::post('/gists', function () {
	App\Models\Gist::create(request(['title', 'description', 'body', 'slug']));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
