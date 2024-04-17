<form class="create-container flex flex-col border-b-[1px] border-[rgb(239, 243, 244)] dark:border-white/20 p-4"
    action="{{ route('tweet.create') }}" id="create-tweet" method="post" enctype="multipart/form-data">
    @csrf
    <div class="line-1 flex items-center justify-center">
        <img class="rounded-full mr-3" src={{ URL::asset('assets/img/x_avatar.png') }} alt="" width="40"
            height="40">
        <textarea class="bg-transparent text-xl h-[50px] resize-none w-full outline-none text-black dark:text-white py-3"
            id="tweet" name="tweet" maxlength="240" placeholder="What is happening?!" cols="0" rows="0"></textarea>
    </div>

    <div class="line-2 flex justify-between">
        <div class="icons flex items-cente pl-14">
            <!-- <label for="">
                                <ion-icon name="image-outline"></ion-icon>
                                <input type="file" accept="image/png, image/gif, image/jpeg" name="media_tweet" id="media_tweet"/>
                            </label> -->
            <div class="image-upload">
                <label for="media_tweet" class="flex">
                    <ion-icon
                        class="text-tweetBackground transition-all duration-500 rounded-full p-2 cursor-pointer  hover:bg-tweetBackground/20"
                        name="image-outline"></ion-icon>
                </label>

                <input class="hidden" type="file" accept="image/png, image/gif, image/jpeg" name="media_tweet"
                    id="media_tweet" />
            </div>

            <ion-icon
                class="text-tweetBackground transition-all duration-500 rounded-full p-2 cursor-pointer hover:bg-tweetBackground/20"
                name="bar-chart-outline"></ion-icon>
            <ion-icon
                class="text-tweetBackground transition-all duration-500 rounded-full p-2 cursor-pointer hover:bg-tweetBackground/20"
                name="calendar-outline"></ion-icon>
            <ion-icon
                class="text-tweetBackground transition-all duration-500 rounded-full p-2 cursor-pointer hover:bg-tweetBackground/20"
                name="happy-outline"></ion-icon>
        </div>
        <button class="bg-tweetBackground font-bold text-white py-2 px-4 rounded-3xl" for="create-tweet"
            type="submit">Post</button>
    </div>

    <div class="line-3">
        <img id="blah" class="w-full rounded-3xl" src="#" alt="">
    </div>
</form>
