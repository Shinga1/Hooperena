<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function index() {
        $topics = topic::all();
        return view('home', ['topics' => $topics]);
    }

    public function news() {
        $topics = topic::all();
        return view('news', ['topics' => $topics]);
    }

    public function show($id) {
        $topics = topic::findOrFail($id);
        $messages = $topics->messages()->get();
        return view('topics', ['topic' => $topics, 'messages' => $messages]);
    }

    public function addMessage(Request $request, $id) {
        $request->validate([
            'content' => 'required|max:255'
        ]);

        $user = Auth::user();
        $message = new ForumMessage([
            'user_id' => $user->id,
            'topic_id' => $id,
            'content' => $request->input('content')
        ]);
        $message->save();

        return redirect()->route('topics.show', ['id' => $id]);
    }

  
}
