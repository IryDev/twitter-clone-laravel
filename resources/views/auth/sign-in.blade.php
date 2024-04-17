@extends('layout.auth')

@section('title', 'Sign In')

@section('content')
<div class="x-logo-small">
    <img src="./public/assets/icon/x-icon.png" alt="">
</div>

<div class="content">
    <h1>Happening now</h1>
    <h2>Join today.</h2>
</div>

<form action="login.controller.php" method="post">
    <input placeholder="username" type="username" name="username" id="username">
    <input placeholder="password" type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>

<p>By signing up, you agree that this website is a <span>Twitter Clone</span> made with <span>PHP</span>,
    It's not the <span>Real Twitter</span>.
</p>

<h3>Don't you have an account ?</h3>

<a href="register.php">Sign Up</a>
@endsection
