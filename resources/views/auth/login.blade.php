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
.breadcrumb {
    font-size: 12px;
    margin-bottom: 20px;
    color: #AACCFF;
}
.breadcrumb a { color: #88CCFF; }

/* Login Box */
.login-container {
    background: #142030;
    border: 1px solid #2A3C55;
    border-radius: 0; /* mantenerlo cuadrado/retro */
    max-width: 480px;
    margin: 0 auto 30px auto;
    overflow: hidden;
}
.login-header {
    background: #1F2F4A;
    padding: 12px 16px;
    border-bottom: 1px solid #334466;
    font-weight: bold;
    color: #CCDDFF;
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
.form-input {
    width: 100%;
    padding: 8px 10px;
    background: #0F1620;
    border: 1px solid #556677;
    color: #E0E0E0;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 13px;
    box-sizing: border-box;
}
.form-input:focus {
    border-color: #88CCFF;
    box-shadow: 0 0 6px rgba(136, 204, 255, 0.3);
    outline: none;
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
.forgot-link:hover {
    color: #FFFFFF;
}
.button {
    background: #334466;
    color: #CCDDFF;
    border: 1px solid #556688;
    padding: 8px 24px;
    font-size: 13px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.15s;
}
.button:hover {
    background: #445577;
    border-color: #88CCFF;
    color: #FFFFFF;
}
.error-message {
    color: #FF8888;
    font-size: 11px;
    margin-top: 4px;
    display: block;
}
#copyright {
    text-align: center;
    padding: 24px 3%;
    color: #556677;
    font-size: 10px;
    border-top: 1px solid #2A3C55;
    margin-top: auto;
}
@media screen and (max-width: 600px) {
    #pagebody { padding: 20px 4%; }
    .login-body { padding: 20px 18px 24px; }
}
</style>

@extends('layouts.forum')

@section('title', 'Threads')

@section('content')
<div id="pagebody">
    <div class="breadcrumb">
        <a href="#">My New Forum</a> »
        <a href="#">Login</a>
    </div>

    <div class="login-container">
        <div class="login-header">
            Member Login
        </div>

        <div class="login-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input 
                        id="email" 
                        class="form-input" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autofocus 
                        autocomplete="username" 
                    />
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        id="password" 
                        class="form-input" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password" 
                    />
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="checkbox-container">
                    <label>
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            name="remember" 
                            {{ old('remember') ? 'checked' : '' }}
                        />
                        Remember me
                    </label>
                </div>

                <div class="form-actions">
                    <a href="/forgot-password" class="forgot-link">Forgot your password?</a>
                    <button type="submit" class="button">Log In</button>
                </div>
            </form>
        </div>
    </div>

    <p style="text-align:center; color:#88AACC; font-size:12px;">
        Don't have an account yet? <a href="/register" style="font-weight:bold;">Register here</a>
    </p>
</div>
@endsection