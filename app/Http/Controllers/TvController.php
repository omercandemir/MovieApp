<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    public function show($id)
    {
        $apikey = '?api_key=79930863940382be1c23b82c0913cf22';
        
        $tvDetail = Http::get('https://api.themoviedb.org/3/tv/'.$id.''.$apikey.'&append_to_response=videos,images,credits,recommendations')
            ->json();
        // dump($tvDetail);
        return view('tv-detail', [
            'tvDetail'  => $tvDetail,
        ]);
        
    }

    public function list($option)
    {
        $apikey = '?api_key=79930863940382be1c23b82c0913cf22';
    }
}
