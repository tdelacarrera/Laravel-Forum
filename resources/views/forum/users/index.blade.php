@extends('layouts.forum')
@section('title', 'Memberlist')

@section('content')

<div id="pagebody">

    <div class="breadcrumb">
        <a href="{{ route('forum.users.index') }}">My New Forum</a> »
        <a href="{{ route('forum.users.index') }}">Memberlist</a>
    </div>

    <div class="memberlist-container">

        <div class="memberlist-header">
            Registered Members - Total: {{ $totalUsers }} users
        </div>

        <div class="memberlist-search">
            <form action="{{ route('forum.users.index') }}" method="GET" class="memberlist-search-form">
                <div class="search-main">
                    <label for="username">Find member:</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Enter username..." 
                        value="{{ request('username') }}" 
                        class="form-input"
                    />
                </div>

                <div class="search-options">
                    <div class="sort-group">
                        <label>Sort by:</label>
                        <select name="sort_by" class="form-input">
                            <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Username</option>
                            <option value="threads_count" {{ request('sort_by') == 'threads_count' ? 'selected' : '' }}>Threads</option>
                            <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Join Date</option>
                        </select>
                    </div>

                    <div class="sort-group">
                        <label>Order:</label>
                        <select name="sort_order" class="form-input">
                            <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                            <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                        </select>
                    </div>

                    <button type="submit" class="button">Search</button>
                </div>
            </form>
        </div>

        <table class="memberlist-table">
            <thead>
                <tr>
                    <th style="width: 10%">Avatar</th>
                    <th style="width: 22%">Username</th>
                    <th style="width: 18%">Rank</th>
                    <th style="width: 10%">Threads</th>
                    <th style="width: 18%">Joined</th>
                    <th style="width: 22%">Website / Location</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td class="memberlist-avatar">
                        <img src="{{ asset('no-image.jpg') }}" alt="{{ $user->name }}" />
                    </td>
                    <td class="memberlist-username">
                        <a href="{{ route('forum.users.show', $user) }}">{{ $user->name }}</a>
                    </td>
                    <td class="memberlist-rank">
                        {{ $user->rank ?? 'Member' }}
                    </td>
                    <td class="memberlist-posts">
                        {{ $user->threads_count ?? 0 }}
                    </td>
                    <td class="memberlist-join">
                        {{ $user->created_at->format('M d, Y') }}
                    </td>
                    <td class="memberlist-website">
                        @if($user->website)
                            <a href="{{ $user->website }}" target="_blank">Website</a><br>
                        @endif
                        <span style="color:#88AACC;">{{ $user->location ?? '—' }}</span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center; padding:30px; color:#88AACC;">
                        No users found matching your criteria.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    @if ($users->hasPages())
    <div class="pagination">
        @if (!$users->onFirstPage())
            <a href="{{ $users->url(1) }}">&laquo; First</a>
        @endif

        @if ($users->previousPageUrl())
            <a href="{{ $users->previousPageUrl() }}">&lt; Prev</a>
        @endif

        @foreach ($users->getUrlRange(max(1, $users->currentPage()-2), min($users->lastPage(), $users->currentPage()+2)) as $page => $url)
            @if ($page == $users->currentPage())
                <span class="current">{{ $page }}</span>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        @if ($users->nextPageUrl())
            <a href="{{ $users->nextPageUrl() }}">Next &gt;</a>
        @endif

        @if (!$users->onLastPage())
            <a href="{{ $users->url($users->lastPage()) }}">Last &raquo;</a>
        @endif

        <span class="page-info">Page {{ $users->currentPage() }} of {{ $users->lastPage() }}</span>
    </div>
    @endif

    <p style="text-align:center; margin:30px 0;">
        <a href="{{ route('forum.users.index') }}" class="button">Show all members</a>
    </p>

</div>
@endsection