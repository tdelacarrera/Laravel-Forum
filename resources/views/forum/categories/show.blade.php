@extends('layouts.forum')

@section('title', 'Threads')

@section('content')
<table class="forumtable">
    <tr>
        <th style="width:60px;"> </th>
        <th>Threads</th>
        <th class="stats">Replies</th>
        <th class="lastpost">Author</th>
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
                {{ $thread->user->name ?? 'Unknown' }}<br>
            </td>
        </tr>
    @endforeach
</table>


@if ($threads->hasPages())
    <div class="pagination" style="margin-top: 20px; text-align:center;">
        {{-- First Page Link --}}
        @if ($threads->onFirstPage())
            <span class="disabled">&laquo; First</span>
        @else
            <a href="{{ $threads->url(1) }}">&laquo; First</a>
        @endif

        {{-- Previous Page Link --}}
        @if ($threads->onFirstPage())
            <span class="disabled">&lt; Prev</span>
        @else
            <a href="{{ $threads->previousPageUrl() }}">&lt; Prev</a>
        @endif

        {{-- Pagination Elements --}}
        <span class="current">Page {{ $threads->currentPage() }} of {{ $threads->lastPage() }}</span>

        @foreach ($threads->getUrlRange(1, $threads->lastPage()) as $page => $url)
            @if ($page == $threads->currentPage())
                <span class="current">{{ $page }}</span>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($threads->hasMorePages())
            <a href="{{ $threads->nextPageUrl() }}">Next &gt;</a>
        @else
            <span class="disabled">Next &gt;</span>
        @endif

        {{-- Last Page Link --}}
        @if ($threads->hasMorePages())
            <a href="{{ $threads->url($threads->lastPage()) }}">Last &raquo;</a>
        @else
            <span class="disabled">Last &raquo;</span>
        @endif
    </div>
@endif

<p style="text-align:center; margin:30px 0;">
    <a href="{{ route('forum.threads.create', ['category_id' => $category->id]) }}" class="button">New Thread</a>
</p>
@endsection