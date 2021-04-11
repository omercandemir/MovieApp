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

// DETAIL 
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show'); // movie detail
Route::get('/tv/{id}', [TvController::class, 'show'])->name('tv.show'); // tv shows detail
Route::get('/person/{id}', [CelebController::class, 'show'])->name('celeb.show'); // celebs detail

// LIST PAGES

Route::get('/movie/popular/{page}', [MoviesController::class, 'popular'])->name('movies.popular');
Route::get('/movie/now-playing/{page}', [MoviesController::class, 'now'])->name('movies.now');
Route::get('/movie/upcoming/{page}', [MoviesController::class, 'upcoming'])->name('movies.upcoming');
Route::get('/movie/top-rated/{page}', [MoviesController::class, 'rated'])->name('movies.rated');

Route::get('/series/popular/{page}', [TvController::class, 'popular'])->name('tv.popular');
Route::get('/series/airing-today/{page}', [TvController::class, 'airing'])->name('tv.today');
Route::get('/series/on-tv/{page}', [TvController::class, 'ontv'])->name('tv.ontv');
Route::get('/series/top-rated/{page}', [TvController::class, 'rated'])->name('tv.rated');

Route::get('/celeb/{page}', [CelebController::class, 'list'])->name('celeb.list');

// MOVIE REDIRECTS    

Route::get('/movie', function(){
    return redirect(url('movie/popular/1'));
});

Route::get('/movie/popular', function(){
    return redirect(url('movie/popular/1'));
});

Route::get('/movie/now-playing', function(){
    return redirect(url('movie/now-playing/1'));
});

Route::get('/movie/upcoming', function(){
    return redirect(url('movie/upcoming/1'));
});

Route::get('/movie/top-rated', function(){
    return redirect(url('movie/top-rated/1'));
});

// SERIES REDIRECTS

Route::get('/series', function(){
    return redirect(url('series/popular/1'));
});

Route::get('/series/popular', function(){
    return redirect(url('series/popular/1'));
});

Route::get('/series/airing-today', function(){
    return redirect(url('series/airing-today/1'));
});

Route::get('/series/on-tv', function(){
    return redirect(url('series/on-tv/1'));
});

Route::get('/series/top-rated', function(){
    return redirect(url('series/top-rated/1'));
});

Route::get('/celeb', function(){
    return redirect(url('celeb/1'));
});