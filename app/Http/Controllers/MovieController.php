<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model Movie
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all from Movie
        $movies = Movie::all();

        // Return $movies to view movies.blade.php
        return view("movies" , compact("movies"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return to view create.blade.php
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          "title" => "required|max:255",
          "description" => "required",
          "year" => "required|integer|min:1895|max:2020",
          "rating" => "required|integer|",
        ]);

        //Array with all the data from the database
        $data_request = $request->all();

        // New is a Database's row created
        $new_movie = new Movie();

        // $new_movie->title = $data_request["title"];
        // $new_movie->description = $data_request["description"];
        // $new_movie->year = $data_request["year"];

        // Contracted form
        $new_movie->fill($data_request);

        $new_movie->rating = $data_request["rating"];

        // Save the new row
        $save = $new_movie->save();

        // In case of $save === true:
        // Select the last movie created by id
        // Redirect to Uri movies.show
        if($save) {
          $save_movie = Movie::orderBy("id", "desc")->first();
          return redirect()->route("movies.show", $save_movie);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view("show", compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view("edit", compact("movie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

        // Array with all the data from the database
        $data_request = $request->all();

        // Update the database with new data
        $movie->update($data_request);

        // Redirect to Uri movies.show
        return redirect()->route("movies.show", $movie);
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
