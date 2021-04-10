<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\CelebController;

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

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');

Route::get('/movie', function(){
    return redirect(url('movie/popular')); // redirect popularm movie
});

Route::get('/tvshow', function(){
    return redirect(url('tvshow/popular')); // redirect popularm movie
});

Route::get('/movie/popular/{page}', [MoviesController::class, 'popular'])->name('movies.popular');
Route::get('/movie/now-playing/{page}', [MoviesController::class, 'now'])->name('movies.now');
Route::get('/movie/upcoming/{page}', [MoviesController::class, 'upcoming'])->name('movies.upcoming');
Route::get('/movie/top-rated/{page}', [MoviesController::class, 'rated'])->name('movies.rated');


// DETAIL 
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show'); // movie detail
Route::get('/tv/{id}', [TvController::class, 'show'])->name('tv.show'); // tv shows detail
Route::get('/person/{id}', [CelebController::class, 'show'])->name('celeb.show'); // celebs detail

