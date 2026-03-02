<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Retro Forum - Best flash games 2004-2008</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style type="text/css">

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

.post {
    margin-bottom: 24px;
    border: 1px solid #2A3C55;
    background: #142030;
}

.post-header {
    background: #1F2F4A;
    padding: 8px 12px;
    border-bottom: 1px solid #334466;
    font-weight: bold;
    color: #CCDDFF;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}

.post-author {
    color: #99DDFF;
}

.post-date {
    color: #88AACC;
    font-size: 11px;
}

.post-body {
    padding: 14px 16px;
    line-height: 1.4;
}

.post-body img {
    max-width: 100%;
    height: auto;
}

.avatar {
    width: 80px;
    text-align: center;
    vertical-align: top;
    padding: 12px 10px 0 12px;
}

.avatar img {
    width: 68px;
    height: 68px;
    border: 1px solid #334466;
    background: #0F1620;
}

.post-table {
    width: 100%;
    border-collapse: collapse;
}

.post-table td {
    vertical-align: top;
}

.signature {
    margin-top: 20px;
    padding-top: 12px;
    border-top: 1px dashed #334466;
    color: #AABBCC;
    font-size: 11px;
}

.post-controls {
    padding: 8px 12px;
    background: #18263A;
    text-align: right;
    font-size: 11px;
}

.post-controls a {
    margin-left: 14px;
    color: #BBDDFF;
}

.post-controls a:hover {
    color: #FFFFFF;
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

@media screen and (min-width: 1400px) {
    #wrapper {
        max-width: 1600px;
        margin: 0 auto;
    }
}

.formtable {
    width: 100%;
    border-collapse: collapse;
    background: #142030;
    border: 1px solid #2A3C55;
}

.formtable th {
    background: #1F2F4A;
    color: #CCDDFF;
    padding: 10px 12px;
    text-align: right;
    vertical-align: top;
    border: 1px solid #334466;
    width: 140px;
    font-weight: normal;
}

.formtable td {
    padding: 10px 12px;
    border: 1px solid #2A3C55;
    background: #18263A;
}

.formtable textarea {
    background: #0F1620;
    color: #E0E0E0;
    border: 1px solid #556677;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 13px;
    padding: 6px;
    resize: vertical;
    min-height: 140px;
}

.formtable textarea:focus {
    border-color: #88CCFF;
    box-shadow: 0 0 6px rgba(136, 204, 255, 0.3);
}

</style>
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

        <div class="pagination">
            <a href="#">&laquo; First</a>
            <a href="#">&lt; Prev</a>
            <span class="current">Page 1 of 14</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">Next &gt;</a>
            <a href="#">Last &raquo;</a>
        </div>

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

        <div class="pagination" style="margin-top:40px;">
            <a href="#">&laquo; First</a>
            <a href="#">&lt; Prev</a>
            <span class="current">Page 1 of 14</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">Next &gt;</a>
            <a href="#">Last &raquo;</a>
        </div>

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