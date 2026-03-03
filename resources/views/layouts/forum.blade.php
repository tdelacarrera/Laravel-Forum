<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'My New Forum')</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}" />
<style type="text/css">
body {
    margin: 0;
    padding: 0;
    background-color: #0D1B26;
    background-image: url('https://files.catbox.moe/retro-forum-bg.jpg');
    background-repeat: repeat;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    color: #E0E0E0;
    line-height: 1.4;
}

a {
    color: #88CCFF;
    text-decoration: none;
}

a:hover {
    color: #FFFFFF;
    text-decoration: underline;
}

/* ==========================================================================
   Layout Principal
   ========================================================================== */
#wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background-color: #0F1620;
    border-left: 1px solid #2A3C55;
    border-right: 1px solid #2A3C55;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
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

#logo span {
    color: #FFDD88;
}

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

/* ==========================================================================
   Navegación / Breadcrumbs
   ========================================================================== */
.breadcrumb,
.breadcrumbs {
    font-size: 11px;
    margin-bottom: 14px;
    color: #AACCFF;
}

.breadcrumb a,
.breadcrumbs a {
    color: #88CCFF;
}

/* ==========================================================================
   Botones (unificados)
   ========================================================================== */
.button,
input[type="submit"],
input[type="button"] {
    background: #334466;
    color: #CCDDFF;
    border: 1px solid #556688;
    padding: 6px 14px;
    font-size: 11px;
    cursor: pointer;
    margin: 0 4px;
    box-sizing: border-box;
}

.button:hover,
input[type="submit"]:hover,
input[type="button"]:hover {
    background: #445577;
    color: #FFFFFF;
}

.button-primary {
    background: #3A5A8C;
    border-color: #6688CC;
    font-weight: bold;
}

.button-primary:hover {
    background: #4A6A9C;
}

/* ==========================================================================
   Tablas genéricas (forumtable, formtable, etc.)
   ========================================================================== */
table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: #1F2F4A;
    color: #CCDDFF;
    padding: 10px 12px;
    text-align: left;
    border: 1px solid #334466;
    font-weight: bold;
}

td {
    padding: 10px 12px;
    border: 1px solid #2A3C55;
    vertical-align: top;
}

/* Forum index */
.forumtable {
    margin-bottom: 24px;
    table-layout: fixed;
}

.forumtable th {
    white-space: nowrap;
}

.forumtable td {
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

/* ==========================================================================
   Posts / Temas
   ========================================================================== */
.post {
    margin-bottom: 24px;
    border: 1px solid #2A3C55;
    background: #142030;
}

.post-header {
    background: #1F2F4A;
    padding: 8px 12px;
    border-bottom: 1px solid #334466;
    color: #CCDDFF;
    font-weight: bold;
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

/* ==========================================================================
   Formularios
   ========================================================================== */
.formtable {
    max-width: 900px;
    margin: 0 auto 20px;
    background: #142030;
    border: 1px solid #2A3C55;
}

.formtable th {
    text-align: right;
    width: 150px;
    vertical-align: top;
    font-weight: bold;
}

.formtable td {
    background: #18263A;
}

.formtable input[type="text"],
.formtable input[type="search"],
.formtable textarea,
.form-input,
.memberlist-search input[type="text"] {
    width: 100%;
    box-sizing: border-box;
    padding: 6px 8px;
    font-family: inherit;
    font-size: 13px;
    background: #0F1620;
    color: #E0E0E0;
    border: 1px solid #556677;
    margin: 2px 0;
}

.formtable textarea {
    min-height: 140px;
    height: 280px;
    resize: vertical;
}

.formtable input:focus,
.formtable textarea:focus,
.form-input:focus {
    border-color: #88CCFF;
    box-shadow: 0 0 6px rgba(136, 204, 255, 0.35);
    outline: none;
}

/* ==========================================================================
   Memberlist
   ========================================================================== */
.memberlist-container {
    background: #142030;
    border: 1px solid #2A3C55;
    margin-bottom: 24px;
}

.memberlist-header {
    background: #1F2F4A;
    padding: 10px 12px;
    border-bottom: 1px solid #334466;
    color: #CCDDFF;
    font-size: 13px;
    font-weight: bold;
}

.memberlist-search {
    padding: 12px 16px;
    background: #18263A;
    border-bottom: 1px solid #2A3C55;
    font-size: 11px;
}

.memberlist-table th {
    color: #AACCFF;
    font-size: 11px;
    padding: 8px 10px;
}

.memberlist-table td {
    padding: 9px 10px;
    border-bottom: 1px solid #2A3C55;
}

.memberlist-table tr:hover td {
    background: #18263A;
}

.memberlist-username a {
    color: #99DDFF;
    font-weight: bold;
}

.memberlist-rank,
.memberlist-join {
    color: #88AACC;
    font-size: 10px;
}

.memberlist-posts {
    text-align: center;
    color: #BBDDFF;
}

.memberlist-avatar img {
    width: 48px;
    height: 48px;
    border: 1px solid #334466;
    background: #0F1620;
}

/* ==========================================================================
   Login / Auth
   ========================================================================== */
.login-container {
    background: #142030;
    border: 1px solid #2A3C55;
    max-width: 480px;
    margin: 0 auto 30px;
    overflow: hidden;
}

.login-header {
    background: #1F2F4A;
    padding: 12px 16px;
    border-bottom: 1px solid #334466;
    color: #CCDDFF;
    font-weight: bold;
    font-size: 14px;
}

.login-body {
    padding: 24px 30px 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    color: #AACCFF;
    font-weight: bold;
    margin-bottom: 6px;
    font-size: 12px;
}

.checkbox-container {
    margin: 18px 0;
}

.checkbox-container label {
    color: #BBDDFF;
    font-size: 12px;
    cursor: pointer;
}

.checkbox-container input[type="checkbox"] {
    margin-right: 8px;
    accent-color: #88CCFF;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 24px;
    flex-wrap: wrap;
    gap: 12px;
}

.forgot-link {
    color: #88CCFF;
    font-size: 12px;
}

.error-message {
    color: #FF8888;
    font-size: 11px;
    margin-top: 4px;
    display: block;
}

/* ==========================================================================
   FAQ
   ========================================================================== */
.faq-container {
    background: #142030;
    border: 1px solid #2A3C55;
    margin-bottom: 24px;
}

.faq-header {
    background: #1F2F4A;
    padding: 10px 16px;
    border-bottom: 1px solid #334466;
    color: #CCDDFF;
    font-weight: bold;
    font-size: 14px;
}

.faq-item {
    margin: 20px 0;
    padding-bottom: 16px;
    border-bottom: 1px dashed #334466;
}

.faq-question {
    font-weight: bold;
    color: #99DDFF;
    margin: 0 0 8px;
    font-size: 13px;
    background: #18263A;
    padding: 8px 12px;
    border-left: 4px solid #88CCFF;
}

.faq-answer {
    padding: 0 12px;
}

.faq-answer ul,
.faq-answer ol {
    margin: 8px 0 8px 24px;
    padding-left: 0;
}

/* ==========================================================================
   Paginación
   ========================================================================== */
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

/* ==========================================================================
   Footer
   ========================================================================== */
#copyright {
    text-align: center;
    padding: 24px 3%;
    color: #556677;
    font-size: 10px;
    border-top: 1px solid #2A3C55;
    margin-top: auto;
}

/* ==========================================================================
   Responsive
   ========================================================================== */
@media screen and (min-width: 1400px) {
    #wrapper {
        max-width: 1600px;
        margin: 0 auto;
    }
    .formtable {
        max-width: 1100px;
    }
}

@media screen and (max-width: 600px) {
    #pagebody {
        padding: 20px 4%;
    }
    .login-body {
        padding: 20px 18px 24px;
    }
}

/* Mejoras específicas para memberlist search */
.memberlist-search {
    padding: 16px 20px;
}

.memberlist-search-form {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    align-items: flex-end;
}

.search-main {
    flex: 1 1 280px;
    min-width: 220px;
}

.search-main label {
    display: block;
    margin-bottom: 6px;
    color: #AACCFF;
    font-weight: bold;
}

.search-options {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: flex-end;
}

.sort-group {
    display: flex;
    flex-direction: column;
    min-width: 120px;
}

.sort-group label {
    margin-bottom: 6px;
    color: #AACCFF;
    font-size: 11px;
}

.memberlist-search select.form-input,
.memberlist-search input.form-input {
    padding: 7px 10px;
    font-size: 13px;
}

/* Ajuste en móviles */
@media screen and (max-width: 768px) {
    .memberlist-search-form {
        flex-direction: column;
        gap: 14px;
    }
    
    .search-options {
        flex-direction: column;
        align-items: stretch;
    }
    
    .sort-group {
        width: 100%;
    }
    
    .memberlist-search button.button {
        align-self: flex-start;
    }
}

</style>
</head>
<body>

<div id="wrapper">

    <!-- Header -->
    @include('forum.partials.header')

    <!-- Navbar -->
    @include('forum.partials.navbar')

    <!-- Page body -->
    <div id="pagebody">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('forum.partials.footer')

</div>

</body>
</html>