@extends('layout.main')

@section('title', 'Profile')

@section('content')
    <div class="container max-w-[1440px] m-auto h-screen flex lg:px-6">
        @include('layout.sidenav')
        <main class="ml-[80px] xl:ml-[260px] flex w-full min-h-screen">
            @include('layout.profile')
            <div class="h-screen border-r-[1px]  border-white/20"></div>
            @include('layout.rightbar')
        </main>
    </div>
@endsection
