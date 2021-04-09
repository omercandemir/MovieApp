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
        $apikey = '?api_key=79930863940382be1c23b82c0913cf22';

        $movieDetail = Http::get('https://api.themoviedb.org/3/movie/'.$id.''.$apikey.'&append_to_response=videos,images,credits,recommendations')
            ->json();
        
        if (!array_key_exists('id', $movieDetail)) {
            abort(404);
        }
        return view('movie-detail', [
            'movieDetail'   => $movieDetail,
        ]);
    }

    public function list($option)
    {
        $options = ['popular', 'now-playing', 'upcoming', 'top-rated'];
        if (in_array($option, $options)) {
            $apikey = '?api_key=79930863940382be1c23b82c0913cf22';
            if ($option == 'popular') {
                $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular'.$apikey.'')
                    ->json()['results'];
                // dump($pagination);
                return view('movie-list', [
                    'option'        => $option,
                    'popularMovies' => $popularMovies,
                ]);
            }
            elseif ($option == 'now-playing') {
                return view('movie-list', [
                    'option'    => $option,
                ]);
            }
            elseif ($option == 'upcoming') {
                return view('movie-list',[
                    'option'    => $option,
                ]);
            }
            else { // top-rated
                return view('movie-list', [
                    'option'    => $option,
                ]);
            }
        }
        else {
            return abort(404);
        }
    }
}
