<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';
    public $option;

    public function render()
    {
        $searchResults = [];
        if ($this->option == 0) {
            if (strlen($this->search >= 2)) {
                $apikey = '?api_key=apikey';
                $searchResults = Http::get('https://api.themoviedb.org/3/search/movie'.$apikey.'&query='.$this->search.'')
                    ->json()['results'];
            }
        }
        elseif ($this->option == 1) {
            if (strlen($this->search >= 2)) {
                $apikey = '?api_key=apikey';
                $searchResults = Http::get('https://api.themoviedb.org/3/search/tv'.$apikey.'&query='.$this->search.'')
                    ->json()['results'];
            }
        }
        else {
            if (strlen($this->search >= 2)) {
                $apikey = '?api_key=apikey';
                $searchResults = Http::get('https://api.themoviedb.org/3/search/person'.$apikey.'&query='.$this->search.'')
                    ->json()['results'];
            }     
        }
        
        // dump($searchResults);
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(6),
        ]);
    }
}
