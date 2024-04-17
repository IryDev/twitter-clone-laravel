<div class="feed w-[600px] min-w-[600px] max-w-[600px] overflow-scroll">
    <div class="title flex justify-between p-3 border-b-[1px] border-[rgb(239, 243, 244)] dark:border-white/20">
        <h1 class="text-black font-bold dark:text-white">Profile</h1>
        <img height="30" width="30" src="{{ URL::asset('assets/icons/star.png') }}" alt="">
    </div>

    <div class="banner w-full h-[200px] bg-[#323437]">
    </div>


    <div class="relative -top-[75px]">
        <div class="flex w-full justify-between items-center px-4 ">
            <img class="rounded-full border-4 border-white dark:border-black" height="150" width="150"
                src="{{ URL::asset('assets/img/x_avatar.png') }}" alt="">
            <button
                class="dark:text-white top-8 hover:bg-white/10 font-bold py-2 px-4 rounded-3xl border-[#536471] border-[1px] relative">
                Edit profile
            </button>
        </div>

        <div class="profile-info px-4">
            <h2 class="font-bold text-2xl dark:text-white">Name</h2>
            <p class="text-gray-500">@username</p>
            <p class="text-gray-500 my-3"><ion-icon name="calendar-outline"></ion-icon> Joined on April 2024</p>
            <div class="flex items-center gap-3">
                <p class="text-gray-500"><span class="dark:text-white font-bold">0</span> Followers</p>
                <p class="text-gray-500"><span class="dark:text-white font-bold">0</span> Following</p>
            </div>
        </div>
    </div>

</div>
