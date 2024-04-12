<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function index() {
        $topics = topic::all();
        return view('home', ['topics' => $topics]);
    }

    public function news() {
        $topics = topic::all();
        return view('news', ['topics' => $topics]);
    }

    public function show($id) {
        $topics = topic::findOrFail($id);
        return view('topics', ['topic' => $topics]);
    }

  
}
