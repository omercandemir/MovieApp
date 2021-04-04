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
    public function index()
    {
        $apikey = '?api_key=79930863940382be1c23b82c0913cf22';
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular'.$apikey.'')
            ->json()['results'];

        $upcomingMovies = Http::get('https://api.themoviedb.org/3/movie/upcoming'.$apikey.'')
            ->json()['results'];
        
        $ratedMovies = Http::get('https://api.themoviedb.org/3/movie/top_rated'.$apikey.'')
            ->json()['results'];
        
        $playingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing'.$apikey.'')
            ->json()['results'];

        $popularTVs = Http::get('https://api.themoviedb.org/3/tv/popular'.$apikey.'')
            ->json()['results'];

        $ratedTVs = Http::get('https://api.themoviedb.org/3/tv/top_rated'.$apikey.'')
            ->json()['results'];
        
        $onairTVs = Http::get('https://api.themoviedb.org/3/tv/on_the_air'.$apikey.'')
        ->json()['results'];

        $todayairTVs = Http::get('https://api.themoviedb.org/3/tv/airing_today'.$apikey.'')
        ->json()['results'];
        
        $popularCelebs = Http::get('https://api.themoviedb.org/3/person/popular'.$apikey.'')
            ->json()['results'];

        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list'.$apikey.'')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function($genre) {
            return [$genre['id'] => $genre['name']];
        });

        // dd($genresFilm);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
