@extends('layout.main')

@section('content')
<div class="auth">
    <div class="container flex justify-between w-full min-h-screen">
        <div class="bg-sec min-h-screen flex items-center justify-center">
            <div class="x-logo-big">
                <img src="{{ URL::asset('assets/icons/x-icon.png') }}" alt="">
            </div>
        </div>
        <div class="sign-up">
            @yield('content-auth')
        </div>
    </div>
</div>
@endsection