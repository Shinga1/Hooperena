@extends('layouts.main')

@section('content')


    <h1>Enter Game Details</h1>
    <div class="container-game"> 
        <form action="{{ url('/') }}" method="POST">
            <label for="title1">Team 1:</label><br>
            <input type="text" id="team1" name="Team 1"><br>
            <label for="title2">Team 2:</label><br>
            <input type="text" id="team2" name="Team 2"><br>

            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date"><br>

            <input type="submit" value="Submit">
        </form>
    </div>

<div class="matches">
    <div class="clickable-box" id="matches-box" onclick="redirectToGameResults()">
    Matches
    </div>
</div>

@endsection