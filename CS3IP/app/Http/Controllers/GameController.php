<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $game = new Game;
        $game->team1 = $request->input('team1');
        $game->team2 = $request->input('team2');
        $game->date = $request->input('date');
        $game->save();

        return redirect('/')->with('success', 'Game details submitted successfully');
    }
}
