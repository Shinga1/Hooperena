<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ForumMessageController extends Controller
{
    public function index(Topic $topic)
{
    $messages = $topic->messages()->with('user')->get();
    return view('forum.messages.index', compact('messages', 'topic'));
}

public function store(Request $request, Topic $topic)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    $message = new ForumMessage();
    $message->content = $request->input('content');
    $message->user_id = auth()->id();
    $message->topic_id = $topic->id;
    $message->save();

    return redirect()->route('forum.messages.index', $topic->id);
}

}
