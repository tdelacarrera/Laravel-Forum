<style>
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
    max-width: 100%;
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
    white-space: nowrap;
}

#pagebody {
    padding: 18px 3%;
    flex: 1 0 auto;
}

h1 {
    font-size: 18px;
    color: #99DDFF;
    margin: 0 0 14px 0;
    padding-bottom: 6px;
    border-bottom: 1px solid #334466;
}

.formtable {
    width: 100%;
    max-width: 900px;
    border-collapse: collapse;
    margin: 0 auto 20px auto;
}

.formtable th {
    background: #1F2F4A;
    color: #CCDDFF;
    padding: 10px 12px;
    font-weight: bold;
    text-align: right;
    width: 160px;
    vertical-align: top;
    border: 1px solid #334466;
}

.formtable td {
    padding: 10px 12px;
    border: 1px solid #2A3C55;
    background: #142030;
    vertical-align: top;
}

.formtable input[type="text"],
.formtable textarea {
    width: 100%;
    box-sizing: border-box;
    padding: 6px;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 13px;
    background: #0F1620;
    color: #E0E0E0;
    border: 1px solid #556677;
    margin: 2px 0;
}

.formtable textarea {
    height: 280px;
    resize: vertical;
    min-height: 180px;
}

.formtable input[type="text"]:focus,
.formtable textarea:focus {
    border-color: #88CCFF;
    outline: none;
    box-shadow: 0 0 6px rgba(136, 204, 255, 0.4);
}

.button {
    background: #334466;
    color: #CCDDFF;
    border: 1px solid #556688;
    padding: 6px 16px;
    font-size: 12px;
    cursor: pointer;
    margin: 0 8px 0 0;
}

.button:hover {
    background: #445577;
}

.button-primary {
    background: #3A5A8C;
    border-color: #6688CC;
    font-weight: bold;
}

.button-primary:hover {
    background: #4A6A9C;
}

.cancellink {
    color: #FF9999;
    font-size: 11px;
    margin-left: 12px;
}

.cancellink:hover {
    color: #FFBBBB;
}

.breadcrumbs {
    font-size: 11px;
    margin-bottom: 16px;
    color: #AABBCC;
}

.breadcrumbs a {
    color: #88CCFF;
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
    .formtable {
        max-width: 1100px;
    }
}
</style>

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

        <form action="#" method="post">
            <table class="formtable">
                <tr>
                    <th>Topic Title:</th>
                    <td>
                        <input type="text" name="subject" maxlength="120" placeholder="Enter a descriptive title..." />
                    </td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td>
                        <textarea name="message" rows="15" placeholder="Write your message here... Use [img] [/img] [url] [/url] etc if BBCode is enabled."></textarea>
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

            <p style="text-align:center; margin:30px 0;">
                <input type="submit" class="button button-primary" value="Submit New Topic" />
                <input type="button" class="button" value="Preview" />
                <a href="#" class="cancellink">[Cancel / Go Back]</a>
            </p>
        </form>

    </div>
@endsection