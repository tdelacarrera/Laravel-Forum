@extends('layouts.forum')

@section('title', 'Home - Forum')

@section('content')
<table class="forumtable">
    <tr>
        <th style="width:60px;"> </th>
        <th>Forum</th>
        <th class="stats">Topics</th>
        <th class="stats">Posts</th>
        <th class="lastpost">Last Post</th>
    </tr>

    @foreach($categories as $category)
        <tr class="{{ $loop->even ? 'row1' : 'row2' }}">
            <td class="forum-icon-cell">
                <img src="" alt="image" />
            </td>
            <td>
                <div class="forumname"><a href="{{ route('forum.categories.update', $category) }}">{{ $category['name'] }}</a></div>
                <div class="forumdesc">{{ $category['description'] }}</div>
            </td>
            <td class="stats">placeholder</td>
            <td class="stats">placeholder</td>
            <td class="lastpost">placeholder</td>
        </tr>
    @endforeach
</table>

<p style="text-align:center; margin:30px 0;">
    <a href="#" class="button">New Topic</a>
    <a href="#" class="button">Mark forums read</a>
</p>
@endsection