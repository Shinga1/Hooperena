<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ForumMessageController;


class TopicsController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('home', ['topics' => $topics]);
    }

    public function news()
    {
        $topics = Topic::all();
        return view('news', ['topics' => $topics]);
    }

    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        $messages = $topic->messages()->get();
        return view('topics', ['topic' => $topic, 'messages' => $messages]);
    }

    public function addMessage(Request $request, $id)
    {
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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $topic = new Topic();
        $topic->title = $request->input('title');
        $topic->description = $request->input('description');
        $topic->user_id = Auth::id();

        $topic->save();

        return redirect()->route('topics.show', ['id' => $topic->id]);
    }
}
