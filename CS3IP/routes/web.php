<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;


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

Route::get('/game', function () {
    return view('game'); 
});

Route::get('/gameResults', function () {
    return view('gameResults'); 
});



// ---------------------------------Forum -----------------------------



// use App\Http\Controllers\ForumController;
// use App\Http\Controllers\ForumMessageController;
// use App\Http\Controllers\ForumReplyController;
// use App\Http\Controllers\UserMessageLikeController;

// /////

// Route::resource('forum', ForumController::class);

// //get
// Route::get('/forum', [ForumController::class, 'index']);
// Route::get('/forum/{topic}', [ForumController::class, 'show'])->name('forum.show');

// //post
// Route::post('/forum/{topic}/message', [ForumMessageController::class, 'store'])->name('forum.message');
// Route::post('/forum/messages/{message}/reply', [ForumReplyController::class, 'store'])->name('forum.reply');
// Route::post('/forum/messages/{message}/like', [UserMessageLikeController::class, 'store'])->name('forum.like');



Route::resource('topics', 'TopicController');
Route::resource('messages', 'ForumMessageController');


//---------------------game handler-----------------------------------


use App\Http\Controllers\GameController;

Route::middleware(['auth'])->group(function () {
    Route::post('/submit', [GameController::class, 'store'])->name('game.store');
});


// --------------register and login&logout--------------------

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'registerDone']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
