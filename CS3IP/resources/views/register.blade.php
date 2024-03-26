@extends('layouts.main')


@section('content')
<div class="container">

    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <input type="text" placeholder="Full Name:" name="name">

        @error('name')
            <div class="danger-colour">
                {{ $message }}
            </div>
        @enderror

        <input type="email" placeholder="Email:" name="email">

        @error('email')
            <div class="danger-colour">
                {{ $message }}
            </div>
        @enderror

        <input type="password" placeholder="Password:" name="password">

        @error('password')
            <div class="danger-colour">
                {{ $message }}
            </div>
        @enderror

        <input type="password" placeholder="Confirm Password:" name="password_confirmation">

        @error('password_confirmation')
            <div class="danger-colour">
                {{ $message }}
            </div>
        @enderror

        <button type="submit">Register</button>
        <div><p><a href="login.php">Log in</a></p></div>
    </form>
     
</div>
@endsection

