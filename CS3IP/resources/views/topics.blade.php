

@extends('layouts.main')

@section('content')
<div class="topic-detail">
    <h2>Wooowww</h2>
    <h2>{{ $topic->title }}</h2>
    <p>{{ $topic->description }}</p>
</div>
@endsection
