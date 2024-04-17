@extends('layout.auth')

@section('title', 'Sign Up')

@section('content-auth')
    <div class="x-logo-small">
        <img src="{{ URL::asset('assets/icons/x-icon.png') }}" alt="">
    </div>

    <div class="content">
        <h1>Happening now</h1>
        <h2>Join today.</h2>
    </div>

    <form action="register.controller.php" method="POST">
        <input placeholder="name" type="text" name="name" id="name" required>
        <input placeholder="username" type="text" name="username" id="username" required>
        <input placeholder="email" type="email" name="email" id="email" required>
        <input placeholder="password" type="password" name="password" id="password" required>
        <button type="submit">Create an account</button>
    </form>

    <p>By signing up, you agree to the <span>Terms of Services</span> and <span>Privacy Policy</span>, including
        <span>Cookie Us</span>.
    </p>

    <h3>Already have an account ?</h3>

    <a href="/sign-in">Login</a>
@endsection
