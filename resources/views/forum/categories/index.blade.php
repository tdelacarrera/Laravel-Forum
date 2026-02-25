@extends('layouts.forum')

@section('title', 'Forum Categories - Forum')

@section('content')
<table class="forumtable">
    <tr>
        <th style="width:60px;"> </th>
        <th>Categories</th>
        <th class="stats">Threads</th>
        <th class="stats">Replies</th>
    </tr>

    @foreach($categories as $category)
        <tr class="{{ $loop->even ? 'row1' : 'row2' }}">
            <td class="forum-icon-cell">
                <img src="" alt="image" />
            </td>
            <td>
                <div class="forumname">
                    <a href="{{ route('forum.categories.show', $category) }}">{{ $category->name }}</a>
                </div>
                <div class="forumdesc">
                    {{ Str::limit($category->description, 512) }}
                </div>
            </td>
            <td class="stats">{{ $category->threads_count }}</td>
            <td class="stats">{{ $category->replies_count }}</td>
        </tr>
    @endforeach
</table>

{{-- Paginación estilo retro forum --}}
@if ($categories->hasPages())
    <div class="pagination" style="margin-top: 20px; text-align:center;">
        {{-- First Page Link --}}
        @if ($categories->onFirstPage())
            <span class="disabled">&laquo; First</span>
        @else
            <a href="{{ $categories->url(1) }}">&laquo; First</a>
        @endif

        {{-- Previous Page Link --}}
        @if ($categories->onFirstPage())
            <span class="disabled">&lt; Prev</span>
        @else
            <a href="{{ $categories->previousPageUrl() }}">&lt; Prev</a>
        @endif

        {{-- Pagination Elements --}}
        <span class="current">Page {{ $categories->currentPage() }} of {{ $categories->lastPage() }}</span>

        @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
            @if ($page == $categories->currentPage())
                <span class="current">{{ $page }}</span>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($categories->hasMorePages())
            <a href="{{ $categories->nextPageUrl() }}">Next &gt;</a>
        @else
            <span class="disabled">Next &gt;</span>
        @endif

        {{-- Last Page Link --}}
        @if ($categories->hasMorePages())
            <a href="{{ $categories->url($categories->lastPage()) }}">Last &raquo;</a>
        @else
            <span class="disabled">Last &raquo;</span>
        @endif
    </div>
@endif
@endsection