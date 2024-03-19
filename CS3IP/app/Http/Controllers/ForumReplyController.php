<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumMessage;
use App\Models\ForumReply;

class ForumReplyController extends Controller
{
    public function store(Request $request, ForumMessage $message)
    {
        $validator = Validator::make($request->all(), [
            'reply_content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $reply = new ForumReply([
            'content' => $request->input('reply_content'),
            'user_id' => auth()->id(),
        ]);

        $message->replies()->save($reply);

        return redirect()->back();
    }
}
