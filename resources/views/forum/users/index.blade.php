<style type="text/css">
/* Reutilizamos exactamente los mismos estilos base de la página anterior */
body {
    background-color: #0D1B26;
    background-image: url('https://files.catbox.moe/retro-forum-bg.jpg');
    background-repeat: repeat;
    margin: 0;
    padding: 0;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    color: #E0E0E0;
}
a { color: #88CCFF; text-decoration: none; }
a:hover { color: #FFFFFF; text-decoration: underline; }
#wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background-color: #0F1620;
    border-left: 1px solid #2A3C55;
    border-right: 1px solid #2A3C55;
    margin: 0 auto;
    width: 100%;
    box-sizing: border-box;
}
#header {
    background: #1A2A44 url('https://i.imgur.com/retro-header-gradient.png') repeat-x top;
    padding: 20px 3%;
    border-bottom: 2px solid #334466;
}
#logo {
    font-family: "Trebuchet MS", Arial, sans-serif;
    font-size: 36px;
    color: #AACCFF;
    letter-spacing: -1px;
    text-shadow: 2px 2px 4px #000;
    margin: 0;
}
#logo span { color: #FFDD88; }
.navbar {
    background: #223344;
    padding: 8px 3%;
    font-size: 11px;
    border-bottom: 1px solid #334455;
}
.navbar a {
    color: #BBDDFF;
    margin-right: 18px;
}
#pagebody {
    padding: 18px 3%;
    flex: 1 0 auto;
}
.breadcrumb {
    font-size: 12px;
    margin-bottom: 12px;
    color: #AACCFF;
}
.breadcrumb a { color: #88CCFF; }

/* Estilos específicos para Memberlist */
.memberlist-container {
    background: #142030;
    border: 1px solid #2A3C55;
    padding: 0;
    margin-bottom: 24px;
}
.memberlist-header {
    background: #1F2F4A;
    padding: 10px 12px;
    border-bottom: 1px solid #334466;
    font-weight: bold;
    color: #CCDDFF;
    font-size: 13px;
}
.memberlist-search {
    padding: 12px 16px;
    background: #18263A;
    border-bottom: 1px solid #2A3C55;
    font-size: 11px;
}
.memberlist-search input[type="text"] {
    background: #0F1620;
    border: 1px solid #556677;
    color: #E0E0E0;
    padding: 4px 6px;
    font-size: 11px;
}
.memberlist-search input[type="submit"] {
    background: #334466;
    color: #CCDDFF;
    border: 1px solid #556688;
    padding: 4px 10px;
    cursor: pointer;
}
.memberlist-search input[type="submit"]:hover {
    background: #445577;
}

.memberlist-table {
    width: 100%;
    border-collapse: collapse;
}
.memberlist-table th {
    background: #1F2F4A;
    color: #AACCFF;
    padding: 8px 10px;
    text-align: left;
    border-bottom: 1px solid #334466;
    font-weight: bold;
    font-size: 11px;
}
.memberlist-table td {
    padding: 9px 10px;
    border-bottom: 1px solid #2A3C55;
    vertical-align: middle;
}
.memberlist-table tr:hover td {
    background: #18263A;
}
.memberlist-username a {
    color: #99DDFF;
    font-weight: bold;
}
.memberlist-username a:hover {
    color: #FFFFFF;
}
.memberlist-rank {
    color: #88AACC;
    font-size: 10px;
}
.memberlist-posts {
    text-align: center;
    color: #BBDDFF;
}
.memberlist-join {
    color: #88AACC;
    font-size: 11px;
}
.memberlist-website a {
    color: #88CCFF;
}
.memberlist-website a:hover {
    color: #FFFFFF;
}
.memberlist-avatar img {
    width: 48px;
    height: 48px;
    border: 1px solid #334466;
    background: #0F1620;
}

.pagination {
    text-align: center;
    margin: 20px 0;
    font-size: 12px;
}
.pagination a {
    margin: 0 6px;
    padding: 4px 8px;
    background: #223344;
    border: 1px solid #334466;
}
.pagination .current {
    background: #445577;
    color: #FFFFFF;
}
#copyright {
    text-align: center;
    padding: 24px 3%;
    color: #556677;
    font-size: 10px;
    border-top: 1px solid #2A3C55;
    margin-top: auto;
}
.button {
    background: #334466;
    color: #CCDDFF;
    border: 1px solid #556688;
    padding: 4px 12px;
    font-size: 11px;
    cursor: pointer;
    margin: 0 4px;
}
.button:hover {
    background: #445577;
}
@media screen and (min-width: 1400px) {
    #wrapper {
        max-width: 1600px;
        margin: 0 auto;
    }
}
</style>
</head>
<body>
@extends('layouts.forum')

@section('title', 'Memberlist')

@section('content')
    <div id="pagebody">
        <div class="breadcrumb">
            <a href="#">My New Forum</a> »
            <a href="#">Memberlist</a>
        </div>
        <div class="memberlist-container">
            <div class="memberlist-header">
                Registered Members - Total: {{ $totalUsers }} users
            </div>

            <div class="memberlist-search">
                <form action="{{ route('forum.users.index') }}" method="GET">
                    Find member:
                    <input type="text" name="username" size="30" placeholder="Enter username..." value="{{ request('username') }}" />
                    <input type="submit" value="Search" />
                    Sort by:
                    <select name="sort_by">
                        <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Username</option>
                        <option value="threads_count" {{ request('sort_by') == 'threads_count' ? 'selected' : '' }}>Threads</option>
                        <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Join Date</option>
                    </select>
                    <select name="sort_order">
                        <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                        <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                    </select>
                    <input type="submit" value="Go" />
                </form>
            </div>
            <table class="memberlist-table">
                <tr>
                    <th style="width:15%">Avatar</th>
                    <th style="width:22%">Username</th>
                    <th style="width:18%">Rank</th>
                    <th style="width:10%">Threads</th>
                    <th style="width:18%">Joined</th>
                    <th style="width:17%">Website / Location</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td class="memberlist-avatar">
                        <img src="" alt="{{$user->name}}" />
                    </td>
                    <td class="memberlist-username">
                        <a href="#">{{$user->name}}</a>
                    </td>
                    <td class="memberlist-rank">Elite Poster</td>
                    <td class="memberlist-posts">{{ $user->threads_count }}</td>
                    <td class="memberlist-join">{{$user->created_at}}</td>
                    <td class="memberlist-website">
                        <a href="http://darkneon666.geocities.com">Geocities Page</a><br />
                        <span style="color:#88AACC;">Lorem ipsum, USA</span>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>

        @if ($users->hasPages())
            <div class="pagination" style="margin-top: 20px; text-align:center;">
                {{-- First Page Link --}}
                @if ($users->onFirstPage())
                    <span class="disabled">&laquo; First</span>
                @else
                    <a href="{{ $users->url(1) }}">&laquo; First</a>
                @endif

                {{-- Previous Page Link --}}
                @if ($users->onFirstPage())
                    <span class="disabled">&lt; Prev</span>
                @else
                    <a href="{{ $users->previousPageUrl() }}">&lt; Prev</a>
                @endif

                {{-- Pagination Elements --}}
                <span class="current">Page {{ $users->currentPage() }} of {{ $users->lastPage() }}</span>

                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    @if ($page == $users->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($users->hasMorePages())
                    <a href="{{ $users->nextPageUrl() }}">Next &gt;</a>
                @else
                    <span class="disabled">Next &gt;</span>
                @endif

                {{-- Last Page Link --}}
                @if ($users->hasMorePages())
                    <a href="{{ $users->url($users->lastPage()) }}">Last &raquo;</a>
                @else
                    <span class="disabled">Last &raquo;</span>
                @endif
            </div>
        @endif

        <p style="text-align:center; margin:20px 0;">
            <input type="button" class="button" value="Find more members" />
        </p>
    </div>
    @endsection