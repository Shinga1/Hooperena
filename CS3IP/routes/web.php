<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    // fetch news data from a database
    $news = [
        'title' => 'Breaking News',
        'content' => 'This is an important piece of news!',
    ];

    return view('news', ['news' => $news]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forum', function () {
    return view('forum'); 
});

Route::get('/gameResults', function () {
    return view('gameResults'); 
});



// ---------------------------------Forum -----------------------------



// routes/web.php
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumMessageController;
use App\Http\Controllers\ForumReplyController;
use App\Http\Controllers\UserMessageLikeController;

/////

Route::resource('forum', ForumController::class);

//get
Route::get('/forum', [ForumController::class, 'index']);
Route::get('/forum/{topic}', [ForumController::class, 'show'])->name('forum.show');

//post
Route::post('/forum/{topic}/message', [ForumMessageController::class, 'store'])->name('forum.message');
Route::post('/forum/messages/{message}/reply', [ForumReplyController::class, 'store'])->name('forum.reply');
Route::post('/forum/messages/{message}/like', [UserMessageLikeController::class, 'store'])->name('forum.like');

