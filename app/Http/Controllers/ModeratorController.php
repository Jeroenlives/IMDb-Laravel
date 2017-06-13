<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeratorController extends Controller
{
    /**
     * Display the main page of the control panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Auth::user()->isModerator()) {
            return redirect(403);
        }

        return view('database.index');
    }

    /**
     * Show a listing of all the movies in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function movies()
    {
        if (! Auth::user()->isModerator()) {
            return redirect(403)->with('message', 'Lol nope!');
        }

        return view('database.movies.index');
    }

    /**
     * Show a listing of all series in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function series()
    {
        if (! Auth::user()->isModerator()) {
            return redirect(403)->with('message', 'Lol nope!');
        }

        return view('database.series.index');
    }

    /**
     * Show a listing of all persons in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function persons()
    {
        if (! Auth::user()->isModerator()) {
            return redirect(403)->with('message', 'Lol nope!');
        }

        return view('database.persons.index');
    }

    /**
     * Show a listing of all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        if (! Auth::user()->isModerator()) {
            return redirect(403)->with('message', 'Lol nope!');
        }

        return view('database.users.index');
    }
}
