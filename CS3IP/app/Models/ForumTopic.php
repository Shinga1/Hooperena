<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    protected $fillable = ['title', 'content'];

    public function messages()
    {
        return $this->hasMany(ForumMessage::class);
    }
}

