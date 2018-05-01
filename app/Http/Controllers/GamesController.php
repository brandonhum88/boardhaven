<?php

namespace App\Http\Controllers;

use App\Game;

class GamesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Game $game)
    {
        return view();
    }
}
