@extends('layout.main')

@section('title', 'Home')

@section('content')
    <div class="container max-w-[1440px] m-auto h-screen flex xl:px-6 lg:pr-0">
        @include('layout.sidenav')
        <main class="ml-[76px] xl:ml-[260px] flex w-full min-h-screen">
            @include('layout.feed')
            <div class="h-screen border-r-[1px] border-[rgb(239, 243, 244)] dark:border-white/20"></div>
            @include('layout.rightbar')
        </main>
    </div>
@endsection
