<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessageLike extends Model
{
    use HasFactory;
    
    public function message()
{
    return $this->belongsTo(ForumMessage::class);
}

}
