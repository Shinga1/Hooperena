<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GamesMatch; // 

class GameMatchController extends Controller
{
    public function index()
    {
        $games_match = GamesMatch::all();
        return view('games_match.index', compact('games_match'));
    }

    public function show($id)
    {
        $games_match = GamesMatch::findOrFail($id); 
        return view('games_match.show', compact('games_match'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team1' => 'required|string',
            'team2' => 'required|string',
            'Date' => 'required|date',
        ]);

        GamesMatch::create([
            'team1' => $request->team1,
            'team2' => $request->team2,
            'date' => $request->Date,
        ]);

        return redirect('/');
    }
}
