<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CelebController extends Controller
{

    public $apikey = '?api_key=79930863940382be1c23b82c0913cf22';

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
}
