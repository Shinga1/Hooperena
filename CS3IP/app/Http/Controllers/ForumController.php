<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumTopic;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = ForumTopic::all();
        return view('forum.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $topic = ForumTopic::create($validatedData);

        return redirect()->route('forum.show', $topic->id)
                         ->with('success', 'Forum topic created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumTopic  $forumTopic
     * @return \Illuminate\Http\Response
     */
    public function show(ForumTopic $topic)
    {
        return view('forum.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumTopic  $forumTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumTopic $topic)
    {
        return view('forum.edit', compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumTopic  $forumTopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumTopic $topic)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $topic->update($validatedData);

        return redirect()->route('forum.show', $topic->id)
                         ->with('success', 'Forum topic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumTopic  $forumTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumTopic $topic)
    {
        $topic->delete();

        return redirect()->route('forum.index')
                         ->with('success', 'Forum topic deleted successfully.');
    }
}
