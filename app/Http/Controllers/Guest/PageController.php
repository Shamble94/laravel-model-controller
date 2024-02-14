<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
     public function index(){
        $movies = Movie::all();
        return view("movies.movies", compact("movies"));
    } 
    public function detail($id){
        $movies = Movie::all();
        $movie = $movies->find($id);
        return view("movies.movies_detail", compact("movie"));
    }
}
