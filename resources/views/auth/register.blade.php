@extends('layouts.forum')

@section('title', 'Register')

@section('content')
<div id="pagebody">
    <div class="breadcrumb">
        <a href="#">My New Forum</a> »
        <a href="#">Register</a>
    </div>

    <div class="login-container">
        <div class="login-header">
            Create Account
        </div>

        <div class="login-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        id="name" 
                        class="form-input" 
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autofocus 
                        autocomplete="name"
                    />
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input 
                        id="email" 
                        class="form-input" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="username"
                    />
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        id="password" 
                        class="form-input" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="new-password"
                    />
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input 
                        id="password_confirmation" 
                        class="form-input" 
                        type="password" 
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password"
                    />
                    @error('password_confirmation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('login') }}" class="forgot-link">
                        Already registered?
                    </a>
                    <button type="submit" class="button">Register</button>
                </div>
            </form>
        </div>
    </div>

    <p style="text-align:center; color:#88AACC; font-size:12px;">
        Back to <a href="{{ route('login') }}" style="font-weight:bold;">Login</a>
    </p>
</div>
@endsection