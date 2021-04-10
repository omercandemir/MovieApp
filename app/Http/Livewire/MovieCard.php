<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Request;
use Http;

class MovieCard extends Component
{
    public $page = 1;
    public function render()
    {
        $movies = [];
        $option = Request::segment(2);
        $apikey = '?api_key=79930863940382be1c23b82c0913cf22';
        if ($option == 'popular') {
            if ($this->page > 1) {
                $movies = Http::get('https://api.themoviedb.org/3/movie/popular'.$apikey.'&page='.$this->page.'')
                    ->json()['results'];
                return view('livewire.movie-card', [
                    'movies'    => $movies,
                    'option'    => $option,
                ]);
            }
            else {
                $movies = Http::get('https://api.themoviedb.org/3/movie/popular'.$apikey.'&page=2')
                    ->json()['results'];
                return view('livewire.movie-card', [
                    'movies'    => $movies,
                    'option'    => $option,
                ]);
            }
        }
        elseif ($option == 'now-playing') {
            return view('livewire.movie-card', [
                'movies'    => $movies,
                'option'    => $option,
            ]);
        }
        elseif ($option == 'upcoming') {
            return view('livewire.movie-card', [
                'movies'    => $movies,
                'option'    => $option,
            ]);
        }
        else { // top-rated
            return view('livewire.movie-card', [
                'movies'    => $movies,
                'option'    => $option,
            ]);
        }
    }
    
    public function nextPage()
    {
        $this->page++;
    }
    public function previousPage()
    {
        if ($this->page == 1) {
            // dont work
        }
        else {
            $this->page--;
        }
    }
    
}
