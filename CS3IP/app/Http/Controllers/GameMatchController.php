<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameMatch;

class GameMatchController extends Controller
{
    public function index()
    {
        $games_match = GameMatch::all();
        return view('game', compact('games_match'));
    }

    public function show($id)
    {
        $games_match = GameMatch::findOrFail($id); 
        return view('gameResults', compact('games_match'));
    }

    public function gameDone(Request $request)
    {
        $request->validate([
            'team1' => 'required|string',
            'team2' => 'required|string',
            'Date' => 'required|date',
        ]);

        GameMatch::create([
            'team1' => $request->team1,
            'team2' => $request->team2,
            'date' => $request->Date,
        ]);

        return redirect('/');
    }
}
