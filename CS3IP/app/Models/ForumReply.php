<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function message()
    {
        return $this->belongsTo(ForumMessage::class);
    }
}
