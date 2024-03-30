<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::paginate(14);
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
  

        $data = $request->all();

        $comic = new Comic;
        $comic->fill($data);
       /*  $comic->title = $data["title"];
        $comic->first_name_author = $data["first_name_author"];
        $comic->last_name_author = $data["last_name_author"];
        $comic->cover = $data["cover"]; 
        $comic->origin_country = $data["origin_country"];
        $comic->publication_date = $data["publication_date"];
        $comic->sold_copies = $data["sold_copies"];
        $comic->publication_status = $data["publication_status"];
        $comic->description = $data["description"]; */
        $comic->save();

        return redirect()->route("comics.show", $comic);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
