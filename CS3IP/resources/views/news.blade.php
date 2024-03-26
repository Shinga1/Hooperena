@extends('layouts.main')

@section('content')

<div class="container">
    <div class="news-box" onclick="toggleCommentSection(1)">
        <h2>Game Recap: Lakers vs. Warriors</h2>
        <p>The Los Angeles Lakers defeated the Golden State Warriors in a thrilling overtime game last night. LeBron James led the Lakers with...</p>
        <div class="comment-section" id="comment-section-1">
            <textarea placeholder="Write your comment here"></textarea>
            <button onclick="postComment(1)">Post Comment</button>
            <button onclick="cancelComment(1)">Cancel</button> <!-- New Cancel button -->
            <div class="comments"></div> <!-- Container to display comments -->
        </div>
    </div>

@endsection
