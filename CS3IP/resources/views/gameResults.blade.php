@extends('layouts.main')

@section ('content')

<h1> Matches </h1>

<!DOCTYPE html>
<html>
<head>
    <title>Games</title>
</head>
<body>
    <h1>List of Games</h1>
    <ul>
        @foreach ($games as $game)
            <li>{{ $game->team1}}</li>
        @endforeach
    </ul>
</body>
</html>


@endsection