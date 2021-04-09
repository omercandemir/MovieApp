<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CelebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $apikey = '?api_key=79930863940382be1c23b82c0913cf22';

        $celebDetail = Http::get('https://api.themoviedb.org/3/person/'.$id.''.$apikey.'&append_to_response=,images,movie_credits,external_ids')
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
