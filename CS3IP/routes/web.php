<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopicsController; 
use App\Http\Controllers\GameMatchController;
use App\Http\Controllers\ForumMessageController;
use App\Http\Controllers\ForumReplyController;



Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
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

Route::get('/gameMatch', function () {
    return view('gameMatch'); 
});

Route::get('/forum', function () {
    return view('forum'); 
});

Route::get('/topics', function () {
    return view('topics'); 
});

// ---------------------------------Forum -----------------------------

Route::get('/forum/{topic}/messages', [ForumMessageController::class, 'index'])->name('forum.messages.index');
Route::post('/forum/{topic}/messages', [ForumMessageController::class, 'store'])->name('forum.messages.store');
Route::get('/forum/messages/{message}/replies', [ForumReplyController::class, 'index'])->name('forum.replies.index');
Route::post('/forum/messages/{message}/replies', [ForumReplyController::class, 'store'])->name('forum.replies.store');

// -----------------------------Topics------------------------------------

Route::get('/news', [TopicsController::class, 'news']);
Route::get('/', [TopicsController::class, 'index']);
Route::get('/topics', [TopicsController::class, 'show'])->name('topics.show');
Route::get('/topics/{id}', [TopicsController::class, 'show']) ->name('topics.home');
Route::get('/topic/{id}', [TopicsController::class, 'show'])->name('topics.news');
Route::post('/topics/{id}/add-message', [TopicsController::class, 'addMessage'])->name('topics.addMessage');


//---------------------game handler-----------------------------------

Route::get('/game', [GameMatchController::class, 'index']); 
Route::post('/game', [GameMatchController::class, 'store']); 

Route::get('/game', [GameMatchController::class, 'index']);
Route::post('/game', [GameMatchController::class, 'gameDone'])->name('game_done');

// --------------register and login&logout--------------------

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'registerDone']);

Route::get('/logout', [LogoutController::class, 'logout']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

