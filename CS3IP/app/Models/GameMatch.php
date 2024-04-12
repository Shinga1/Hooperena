<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameMatch extends Model
{
    use HasFactory;

    protected $table = 'games_match'; 

    protected $fillable = [
        'team1', 'team2', 'Date',
    ];
}
