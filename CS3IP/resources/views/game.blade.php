@extends('layouts.main')

@section('content')

<h1>Enter Game Details</h1>
<div class="container-game"> 
    <form action="{{ route('game_done') }}" method="POST">
        @csrf 
        <label for="team1">Team 1:</label><br>
        <input type="text" id="team1" name="team1"><br> 

        <label for="team2">Team 2:</label><br>
        <input type="text" id="team2" name="team2"><br> 

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="Date"><br> 

        <input type="submit" value="Submit">
    </form>
</div>

<div class="matches">
    <div class="clickable-box" id="matches-box" onclick="redirectToGameResults()">
    Matches
    </div>
</div>

@endsection
