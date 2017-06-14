<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Movie, Series, Person};
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = DB::table('series')->get();
        $movies = DB::table('movies')->get();
        $celebs = Person::getBornToday();
        return view('home', compact($series, $movies, $celebs));
    }
}
