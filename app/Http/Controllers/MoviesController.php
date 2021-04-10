<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $apikey = '?api_key=79930863940382be1c23b82c0913cf22';
    
    public function index()
    {
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular'.$this->apikey.'')
            ->json()['results'];

        $upcomingMovies = Http::get('https://api.themoviedb.org/3/movie/upcoming'.$this->apikey.'')
            ->json()['results'];
        
        $ratedMovies = Http::get('https://api.themoviedb.org/3/movie/top_rated'.$this->apikey.'')
            ->json()['results'];
        
        $playingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing'.$this->apikey.'')
            ->json()['results'];

        $popularTVs = Http::get('https://api.themoviedb.org/3/tv/popular'.$this->apikey.'')
            ->json()['results'];

        $ratedTVs = Http::get('https://api.themoviedb.org/3/tv/top_rated'.$this->apikey.'')
            ->json()['results'];
        
        $onairTVs = Http::get('https://api.themoviedb.org/3/tv/on_the_air'.$this->apikey.'')
        ->json()['results'];

        $todayairTVs = Http::get('https://api.themoviedb.org/3/tv/airing_today'.$this->apikey.'')
        ->json()['results'];
        
        $popularCelebs = Http::get('https://api.themoviedb.org/3/person/popular'.$this->apikey.'')
            ->json()['results'];

        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list'.$this->apikey.'')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function($genre) {
            return [$genre['id'] => $genre['name']];
        });

        // dd($popularMovies);
        return view('index', [
            'popularMovies'     => $popularMovies,
            'upcomingMovies'    => $upcomingMovies,
            'ratedMovies'       => $ratedMovies,
            'playingMovies'     => $playingMovies,
            'popularTVs'        => $popularTVs,
            'ratedTVs'          => $ratedTVs,
            'onairTVs'          => $onairTVs,
            'todayairTVs'       => $todayairTVs,
            'popularCelebs'     => $popularCelebs,
            'genres'            => $genres,
        ]);
    }

    public function show($id)
    {

        $movieDetail = Http::get('https://api.themoviedb.org/3/movie/'.$id.''.$this->apikey.'&append_to_response=videos,images,credits,recommendations')
            ->json();
        
        if (!array_key_exists('id', $movieDetail)) {
            abort(404);
        }
        return view('movie-detail', [
            'movieDetail'   => $movieDetail,
        ]);
    }

    public function popular($page)
    {
        $pages = [1, 2, 3, 4, 5];
        if (in_array($page, $pages)) {
            if ($page == 1) {
                $movies = Http::get('https://api.themoviedb.org/3/movie/popular'.$this->apikey.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }
            else {
                $movies = Http::get('https://api.themoviedb.org/3/movie/popular'.$this->apikey.'&page='.$page.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }

        }
        else {
            return abort(404);
        }
    }

    public function now($page)
    {
        $pages = [1, 2, 3, 4, 5];
        if (in_array($page, $pages)) {
            if ($page == 1) {
                $movies = Http::get('https://api.themoviedb.org/3/movie/now_playing'.$this->apikey.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }
            else {
                $movies = Http::get('https://api.themoviedb.org/3/movie/now_playing'.$this->apikey.'&page='.$page.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }

        }
        else {
            return abort(404);
        }
    }

    public function upcoming($page)
    {
        $pages = [1, 2, 3, 4, 5];
        if (in_array($page, $pages)) {
            if ($page == 1) {
                $movies = Http::get('https://api.themoviedb.org/3/movie/upcoming'.$this->apikey.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }
            else {
                $movies = Http::get('https://api.themoviedb.org/3/movie/upcoming'.$this->apikey.'&page='.$page.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }

        }
        else {
            return abort(404);
        }
    }

    public function rated($page)
    {
        $pages = [1, 2, 3, 4, 5];
        if (in_array($page, $pages)) {
            if ($page == 1) {
                $movies = Http::get('https://api.themoviedb.org/3/movie/top_rated'.$this->apikey.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }
            else {
                $movies = Http::get('https://api.themoviedb.org/3/movie/top_rated'.$this->apikey.'&page='.$page.'')
                    ->json()['results'];
                return view('movie-list', [
                    'movies' => $movies,
                ]);
            }

        }
        else {
            return abort(404);
        }
    }
}
