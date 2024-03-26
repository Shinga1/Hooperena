@extends('layouts.main')

@section('content')


    <h1>Enter Game Details</h1>
    <form action="/submit" method="POST">
        <label for="title1">Team 1:</label><br>
        <input type="text" id="team1" name="Team 1"><br>
        <label for="title2">Team 2:</label><br>
        <input type="text" id="team2" name="Team 2"><br>

        <label for="date">Date:</label><br>
        <input type="date" id="date" name="date"><br>

        <label for="Created_at">Created at:</label><br>
        <label for="Update_at">Updated at:</label><br>

        <input type="submit" value="Submit">
    </form>


@endsection