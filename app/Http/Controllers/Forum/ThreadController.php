<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Thread;
use App\Models\Category;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::all();
        return view('forum.threads.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $category = null;

        if ($request->has('category_id')) {
            $category = Category::find($request->query('category_id'));
        }
        
        return view('forum.threads.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id'
        ]);
         $data['user_id'] = auth()->id();

        Thread::create($data);

        return redirect()->route('forum.categories.show', $data['category_id'])->with('success', 'Thread created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        $replies = $thread->replies()->with('user')->paginate(100);

        return view('forum.threads.show', compact('thread', 'replies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
