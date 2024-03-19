<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumTopic;
use App\Models\ForumMessage;

class ForumMessageController extends Controller
{
    
    public function store(Request $request, ForumTopic $topic)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $message = new ForumMessage([
            'content' => $request->input('content'),
            'user_id' => auth()->id(),
        ]);

        $topic->messages()->save($message);

        return redirect()->route('forum.show', ['topic' => $topic]);
    }
}
