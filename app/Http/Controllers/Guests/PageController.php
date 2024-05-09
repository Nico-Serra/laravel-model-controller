<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {

        

        return view('guests.home');
    }
    public function movies  () {

        $movies = Movie::all();
        

        return view('guests.movies', compact('movies'));
    }
    public function about () {

        

        return view('guests.about');
    }
}
