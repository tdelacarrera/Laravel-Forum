@extends('layouts.forum')

@section('title', 'Threads')

@section('content')
    <div id="pagebody">

        <div class="breadcrumbs">
            <a href="#">Home</a> »
            <a href="#">General Discussion</a> »
            New Topic
        </div>

        <h1>Post New Topic</h1>

        <form method="post" action="{{ route('forum.threads.store') }}">
            @csrf
            <table class="formtable">
                <tr>
                    <th>Topic Title:</th>
                    <td>
                        <input type="text" name="title" maxlength="120" placeholder="Enter a descriptive title..." />
                    </td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td>
                        <textarea name="content" rows="15" placeholder="Write your message here..."></textarea>
                        <div style="margin-top:8px; font-size:10px; color:#88AACC;">
                            BBCode enabled • Smilies enabled • [ Preview ] button coming soon™
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Options:</th>
                    <td style="padding:12px;">
                        <label><input type="checkbox" name="notify" /> Notify me when someone replies</label><br />
                        <label><input type="checkbox" name="lock" /> Lock this topic</label>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="category_id" value="{{ $category->id }}">

            <p style="text-align:center; margin:30px 0;">
                <input type="submit" class="button button-primary" value="Submit New Topic" />
                <input type="button" class="button" value="Preview" />
                <a href="#" class="cancellink">[Cancel / Go Back]</a>
            </p>
        </form>

    </div>
@endsection