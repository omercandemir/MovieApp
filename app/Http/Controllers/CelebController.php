<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CelebController extends Controller
{

    public $apikey = '?api_key=apinkey';

    public function show($id)
    {
        $celebDetail = Http::get('https://api.themoviedb.org/3/person/'.$id.''.$this->apikey.'&append_to_response=,images,movie_credits,external_ids')
            ->json();
        
        if (!array_key_exists('id', $celebDetail)) {
            abort(404);
        }
        // dump($celebDetail['movie_credits']['cast']);
        return view('celeb-detail', [
            'celebDetail'   => $celebDetail,
        ]);
    }

    public function list($page)
    {
        $pages = [1, 2, 3, 4, 5];
        if (in_array($page, $pages)) {
            if ($page == 1) {
                $celebs = Http::get('https://api.themoviedb.org/3/person/popular'.$this->apikey.'')
                    ->json()['results'];
                return view('celeb-list', [
                    'celebs' => $celebs,
                ]);
            }
            else {
                $celebs = Http::get('https://api.themoviedb.org/3/person/popular'.$this->apikey.'&page='.$page.'')
                    ->json()['results'];
                return view('celeb-list', [
                    'celebs' => $celebs,
                ]);
            }

        }
        else {
            return abort(404);
        }
    }
}
