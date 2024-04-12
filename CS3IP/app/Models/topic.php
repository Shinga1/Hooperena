<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'description'];

    public function messages()
    {
        return $this->hasMany(ForumMessage::class);
    }
}
