@extends('layouts.forum')

@section('title', 'Forum Categories - Forum')

@section('content')
<table class="forumtable">
    <tr>
        <th style="width:60px;"> </th>
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
                <div class="forumname"><a href="{{ route('forum.categories.show', $category) }}">{{ $category->name }}</a></div>
                <div class="forumdesc"> {{ Str::limit($category->description, 512) }}</div>
            </td>
            <td class="stats">{{ $category->threads_count }}</td>
            <td class="stats">{{ $category->replies_count }}</td>
        </tr>
    @endforeach
</table>
@endsection