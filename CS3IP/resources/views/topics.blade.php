@extends('layouts.main')

@section('content')
<div class="container">
    <div class="topic-container">
        <div class="topic-detail">
            <h2>{{ $topic->title }}</h2>
            <p>{{ $topic->description }}</p>
        </div>
    </div>
    <div class="message-container">
        <h3>Comments</h3>
        @foreach($messages as $message)
            <div class="message">
                <p><strong>{{ $message->user->name }}</strong>: {{ $message->content }}</p>
            </div>
        @endforeach
        @auth
            <form action="{{ route('topics.addMessage', ['id' => $topic->id]) }}" method="post" class="message-form">
                @csrf
                <div class="form-group">
                    <label for="content">Your Comment:</label>
                    <textarea name="content" id="content" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
        @else
            <p>Please <a href="{{ route('login') }}">login</a> to add comments.</p>
        @endauth
    </div>
</div>

     
@endsection
