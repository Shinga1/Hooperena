<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumMessage extends Model
{

    use HasFactory;

    protected $fillable = ['content', 'user_id'];

    public function topic()
    {
        return $this->belongsTo(ForumTopic::class);
    }

    public function replies()
    {
        return $this->hasMany(ForumReply::class);
    }
}