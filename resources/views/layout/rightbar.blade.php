<div class="trends-who lg:w-[290px] xl:w-[350px] hidden lg:block px-2 mt-2">
    <form
        class="search-bar flex items-center justify-between py-2 px-5 rounded-3xl border-[1px] border-transparent cursor-pointer bg-[#f7f9f9] dark:bg-[#212327]"
        id="search" action="home.php" method="get">
        <ion-icon class="mr-5 text-2xl  dark:text-white" name="search-outline"></ion-icon>
        <input class="outline-none bg-transparent w-full dark:text-white"" type="text" placeholder="Search" id="username"
            name="username">
    </form>

    <div class="subscribe-premium rounded-2xl bg-[#f7f9f9] dark:bg-[#16181c] p-4 mt-4">
        <div class="subscribe">
            <h2 class="font-bold text-xl dark:text-white">Subscribe to Premium</h2>
            <p class="my-2 dark:text-white">Subscribe to unlock new features and if eligible, receive a share of ads revenue.</p>
            <button
                class=" bg-black dark:bg-tweetBackground rounded-3xl p-2 px-3 text-white font-bold">Subscribe</button>
        </div>
    </div>

    <div class="whotofollow rounded-2xl bg-[#f7f9f9] dark:bg-[#16181c] py-4 mt-4">
        <h2 class="font-bold text-xl dark:text-white px-4 mb-3">Who to follow</h2>
        <ul>
            <li class="flex justify-between items-center hover:bg-black/50 px-4 py-2">
                <div class="flex items-center">
                    <img src={{ URL::asset('assets/img/x_avatar.png') }} class="rounded-full mr-3" width="40" height="40" alt="">
                    <div class="info">
                        <p class="name font-bold dark:text-white truncate">Pole Leonard Vinci
                        </p>
                        <p class="username text-gray-500">@poledevinci</p>
                    </div>
                </div>
                <button class="bg-tweetBackground rounded-3xl p-2 px-3 text-white dark:bg-white dark:text-black font-bold">Follow</button>
            </li>
        </ul>
    </div>
</div>
