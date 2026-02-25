@extends('layouts.forum')

@section('title', 'Threads')

@section('content')
<table class="forumtable">
    <tr>
        <th style="width:60px;"> </th>
        <th>Threads</th>
        <th class="stats">Replies</th>
        <th class="lastpost">Last Reply</th>
    </tr>
    @foreach($threads as $thread)
        <tr class="{{ $loop->even ? 'row1' : 'row2' }}">
            <td class="forum-icon-cell">
                <img src="" alt="image" />
            </td>
            <td>
                <div class="forumname"><a href="{{ route('forum.threads.show', $thread) }}">{{ $thread->title }}</a></div>
                <div class="forumdesc">{{ Str::limit($category->description, 512) }}</div>
            </td>
            <td class="stats">{{ $thread->replies_count }}</td>
            <td class="lastpost">
                {{ Str::limit($thread->lastReply->content ?? 'No replies yet', 100) }}<br>
                {{ $thread->lastReply->user->name ?? 'Unknown' }}
            </td>
        </tr>
    @endforeach
</table>

<p style="text-align:center; margin:30px 0;">
    <a href="{{ route('forum.threads.create') }}" class="button">New Topic</a>
</p>
@endsection