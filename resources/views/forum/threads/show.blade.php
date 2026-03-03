@extends('layouts.forum')

@section('title', 'Home - Forum')

@section('content')
  <div id="pagebody">

        <div class="breadcrumb">
            <a href="#">My New Forum</a> »
            <a href="#">General Discussion</a> »
            {{ $thread->title }}
        </div>

        <p style="text-align:right; margin:12px 0;">
            <input type="button" class="button" value="Reply" />
            <input type="button" class="button" value="New Topic" />
            <input type="button" class="button" value="Post Reply" />
        </p>

        @if ($replies->hasPages())
            <div class="pagination" style="margin-top: 20px; text-align:center;">
                {{-- First Page Link --}}
                @if ($replies->onFirstPage())
                    <span class="disabled">&laquo; First</span>
                @else
                    <a href="{{ $replies->url(1) }}">&laquo; First</a>
                @endif

                {{-- Previous Page Link --}}
                @if ($replies->onFirstPage())
                    <span class="disabled">&lt; Prev</span>
                @else
                    <a href="{{ $replies->previousPageUrl() }}">&lt; Prev</a>
                @endif

                {{-- Pagination Elements --}}
                <span class="current">Page {{ $replies->currentPage() }} of {{ $replies->lastPage() }}</span>

                @foreach ($replies->getUrlRange(1, $replies->lastPage()) as $page => $url)
                    @if ($page == $replies->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($replies->hasMorePages())
                    <a href="{{ $replies->nextPageUrl() }}">Next &gt;</a>
                @else
                    <span class="disabled">Next &gt;</span>
                @endif

                {{-- Last Page Link --}}
                @if ($replies->hasMorePages())
                    <a href="{{ $replies->url($replies->lastPage()) }}">Last &raquo;</a>
                @else
                    <span class="disabled">Last &raquo;</span>
                @endif
            </div>
        @endif


    @foreach($replies as $reply)
    <!-- Post 1 (OP) -->
    <div class="post" id="reply-{{ $reply->id }}">
        <table class="post-table">
            <tr>
                <td class="avatar">
                    <img src="" alt="Avatar" />
                </td>
                <td>
                    <div class="post-header">
                        <span class="post-author">{{ $reply->user->name }}</span>
                        <span class="post-date">Posted: {{ $reply->created_at->format('M d, Y h:i A') }}</span>
                    </div>

                    <div class="post-body">
                        <strong>Topic: Lorem Ipsum Dolor Sit Amet</strong><br /><br />
                        {{$reply->content}}
                    </div>

                    <div class="signature">
                        <hr style="border-color:#334466; border-style:dashed;" />
                        {{ $reply->user->email }}<br />
                        <img src="" alt="Signature" />
                    </div>
                </td>
            </tr>
        </table>
        <div class="post-controls">
            <a href="#">Quote</a>
            <a href="#">Reply</a>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
            <a href="#">Report</a>
        </div>
    </div>
    @endforeach
        <!-- More posts... -->

        @if ($replies->hasPages())
            <div class="pagination" style="margin-top: 20px; text-align:center;">
                {{-- First Page Link --}}
                @if ($replies->onFirstPage())
                    <span class="disabled">&laquo; First</span>
                @else
                    <a href="{{ $replies->url(1) }}">&laquo; First</a>
                @endif

                {{-- Previous Page Link --}}
                @if ($replies->onFirstPage())
                    <span class="disabled">&lt; Prev</span>
                @else
                    <a href="{{ $replies->previousPageUrl() }}">&lt; Prev</a>
                @endif

                {{-- Pagination Elements --}}
                <span class="current">Page {{ $replies->currentPage() }} of {{ $replies->lastPage() }}</span>

                @foreach ($replies->getUrlRange(1, $replies->lastPage()) as $page => $url)
                    @if ($page == $replies->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($replies->hasMorePages())
                    <a href="{{ $replies->nextPageUrl() }}">Next &gt;</a>
                @else
                    <span class="disabled">Next &gt;</span>
                @endif

                {{-- Last Page Link --}}
                @if ($replies->hasMorePages())
                    <a href="{{ $replies->url($replies->lastPage()) }}">Last &raquo;</a>
                @else
                    <span class="disabled">Last &raquo;</span>
                @endif
            </div>
        @endif


        <p style="text-align:center; margin:30px 0;">
            <input type="button" class="button" value="Reply to this topic" />
        </p>

    </div>
    <!-- Quick Reply Box - al final del thread -->
    <div style="margin: 40px 0 60px 0; max-width: 980px; margin-left: auto; margin-right: auto;">
        <h2 style="font-size: 14px; color: #99DDFF; margin: 0 0 10px 0; border-bottom: 1px solid #334466; padding-bottom: 6px;">
            Quick Reply to this topic
        </h2>

        <form action="{{ route('forum.replies.store', ['thread_id' => $thread->id]) }}" method="post">
            @csrf
            <table class="formtable" style="margin-bottom: 0;">
                <tr>
                    <th style="width: 140px;">Message:</th>
                    <td>
                        <textarea name="content" rows="10" style="height: 180px; width: 100%;" placeholder="Type your reply here... BBCode & smilies enabled"></textarea>
                        
                        <div style="margin-top: 8px; font-size: 10px; color: #88AACC;">
                            <label><input type="checkbox" name="notify" /> Notify me of replies</label><br />
                            <label><input type="checkbox" name="disable_bbcode" /> Disable BBCode</label>
                            &nbsp; • &nbsp; [ <a href="#">Full Editor / More Options</a> ]
                        </div>
                    </td>
                </tr>
            </table>

            <p style="text-align: center; margin: 20px 0 0 0;">
                <input type="submit" class="button button-primary" value="Post Quick Reply" style="font-weight: bold;" />
                <input type="button" class="button" value="Preview" />
                <input type="reset" class="button" value="Clear" />
            </p>
        </form>
    </div>
@endsection