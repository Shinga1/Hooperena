<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumMessage;
use App\Models\ForumReply;

class ForumReplyController extends Controller
{
    public function index(ForumMessage $message)
    {
        $replies = $message->replies()->with('user')->get();
        return view('forum.replies.index', compact('replies', 'message'));
    }
    
    public function store(Request $request, ForumMessage $message)
    {
        $request->validate([
            'content' => 'required|string',
        ]);
    
        $reply = new ForumReply();
        $reply->content = $request->input('content');
        $reply->user_id = auth()->id();
        $reply->message_id = $message->id;
        $reply->save();
    
        return redirect()->route('forum.replies.index', $message->id);
    }
    
}
