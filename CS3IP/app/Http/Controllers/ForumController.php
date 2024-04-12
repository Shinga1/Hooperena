<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class ForumController extends Controller
{
    public function show(Topic $topic)
    {
        $messages = $topic->messages()->with('user', 'replies.user')->get();
        return view('forum', compact('topic', 'messages'));
    }
}
