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