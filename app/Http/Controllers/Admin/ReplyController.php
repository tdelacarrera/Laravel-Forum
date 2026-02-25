<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $replies = Reply::orderBy('id','desc')->paginate(10);
        return view('admin.replies.index', compact('replies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reply $reply)
    {
        return view('admin.replies.edit', compact('reply'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reply $reply)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        $reply->update($request->all());

        return redirect()
            ->route('admin.replies.index')
            ->with('success', 'Reply updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        $reply->delete();

        return redirect()
            ->route('admin.replies.index')
            ->with('success', 'Reply deleted successfully');
    }
}
