<div id="header">
    <div id="logo">My<span>New</span>Forum</div>
    <style type="text/css">

    body {
        background-color: #0D1B26;
        background-image: url(''); /* optional starry/dark bg */
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
        max-width: 100%;           /* full width possible */
        width: 100%;
        box-sizing: border-box;
    }

    #header {
        background: #1A2A44 url('') repeat-x top;
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

    .forumtable {
        width: 100%;
        margin-bottom: 24px;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .forumtable th {
        background: #1F2F4A;
        color: #CCDDFF;
        padding: 10px 8px;
        font-weight: bold;
        text-align: left;
        border: 1px solid #334466;
        white-space: nowrap;
    }

    .forumtable td {
        padding: 10px 8px;
        border: 1px solid #2A3C55;
        background: #142030;
        word-wrap: break-word;
    }

    .row1 { background: #142030; }
    .row2 { background: #18263A; }

    .forum-icon-cell {
        width: 60px;
        text-align: center;
        vertical-align: middle;
    }

    .forumname {
        font-size: 14px;
        font-weight: bold;
        color: #99DDFF;
    }

    .forumdesc {
        color: #AABBCC;
        font-size: 11px;
        margin-top: 4px;
    }

    .stats {
        text-align: center;
        color: #88AACC;
        font-size: 11px;
        width: 90px;
    }

    .lastpost {
        font-size: 11px;
        color: #BBBBCC;
        width: 260px;
    }

    .lastpost a {
        color: #DDFF88;
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
            max-width: 1600px;     /* optional: cap very wide screens so text doesn't stretch too much */
            margin: 0 auto;
        }
    }

    </style>
</div>