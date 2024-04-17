<?php

$navLinks = [
    [
        'icon' => 'home-outline',
        'text' => 'Home',
        'link' => '/',
    ],
    [
        'icon' => 'search-outline',
        'text' => 'Explore',
        'link' => '/explore',
    ],
    [
        'icon' => 'notifications-outline',
        'text' => 'Notification',
        'link' => '/notification',
    ],
    [
        'icon' => 'mail-outline',
        'text' => 'Messages',
        'link' => '/messages',
    ],
    [
        'icon' => 'list-outline',
        'text' => 'Lists',
        'link' => '/lists'
    ],
    [
        'icon' => 'bookmark-outline',
        'text' => 'Bookmarks',
        'link' => '/bookmarks',
    ],
    [
        'icon' => 'people-outline',
        'text' => 'Communities',
        'link' => '/communities',
    ],
    [
        'icon' => 'person-outline',
        'text' => 'Profile',
        'link' => '/profile',
    ],
    [
        'icon' => 'ellipsis-horizontal-circle-outline',
        'text' => 'More',
        'link' => '/more',
    ],
];

?>

<aside class="h-full px-1 xl:w-[260px] flex flex-col justify-between py-6 border-r-[1px] pt-0 border-[rgb(239, 243, 244)] dark:border-white/20 fixed">
    <nav>
        <ul class="nav-bar flex flex-col justify-start items-center w-[68px] lg:items-start relative z-50">
            <li class="nav-bar-brand hover:bg-itemBackground py-4 px-3 xl:px-3 flex justify-center items-center xl:p-2 mb-1 rounded-full">
                <a href="#">
                    <img class="invert dark:invert-0" src="{{ URL::asset('assets/icons/x-icon.png') }}" alt=""
                        width="25" height="25">
                </a>
            </li>

            @foreach ($navLinks as $link)
                <li
                    class="nav-item py-2 px-3 xl:px-3 xl:py-3 text-black dark:text-white flex items-center justify-start rounded-3xl cursor-pointer hover:bg-itemBackground">
                    <a href="{{$link['link']}}" class="nav-link flex items-center justify-start">
                        <ion-icon class="text-2xl xl:mr-4" name="{{ $link['icon'] }}"></ion-icon>
                        <span class="hidden text-xl xl:inline">{{ $link['text'] }}</span>
                    </a>
                </li>
            @endforeach

            <a href=""
                class="bg-tweetBackground xl:w-[230px] p-2 xl:p-4 font-bold rounded-full text-sm text-center text-white mt-2">
                <img class="xl:hidden" width="35" height="35" src={{ URL::asset('assets/icons/feather.png') }} alt="">
                <div class="text hidden xl:block">Post</div>
            </a>
        </ul>
    </nav>

    <div class="profile-btn-container">
        <div class="logout-box hidden ">
            <a href="delete_account.php">Delete your account</a>
            <a href="logout.php">Log out @ username</a>
        </div>

        <button
            class="profile-btn text-sm hover:bg-itemBackground xl:w-[250px] flex justify-between items-center p-2 rounded-full ">
            <div class="profile-info flex justify-between items-center">
                <img class="profile-img rounded-full mr-3" src="{{ URL::asset('assets/img/x_avatar.png') }}"
                    alt="" width="35" height="35" />

                <div class="hidden xl:inline-block">
                    <p class="text-left leading-6 font-bold capitalize text-black dark:text-white">name</p>
                    <p class="text-secondary capitalize">@username</p>
                </div>
            </div>
            <div class="hidden xl:block option-icon text-black dark:text-white">
                <ion-icon name="ellipsis-horizontal"></ion-icon>
            </div>
        </button>
    </div>
</aside>
