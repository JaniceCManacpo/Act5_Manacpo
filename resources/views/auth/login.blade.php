
<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
@endsection
