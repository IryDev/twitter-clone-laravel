<div class="feed w-[600px] min-w-[600px] max-w-[600px] overflow-scroll">

    <div
        class="title dark:bg-black/50 backdrop-blur-lg  flex justify-between p-3 border-b-[1px] border-[rgb(239, 243, 244)] dark:border-white/20">
        <h1 class="text-black font-bold dark:text-white">Home</h1>
        <img class="object-contain" height="20" width="20" src="{{ URL::asset('assets/icons/star.png') }}"
            alt="">
    </div>

    {{-- form tweet --}}
    @include('shared.create-tweet')

    <div class="tweet-list">
        @foreach ($tweets as $tweet)
            <article
                class="border-b-[1px] border-[rgb(239, 243, 244)] dark:border-white/20 flex items-start flex-row p-4">
                <img class="rounded-full mr-3" src={{ URL::asset('assets/img/x_avatar.png') }} alt=""
                    width="40" height="40">
                <div class="tweet-container w-full relative">
                    <div class="tweet-header flex justify-between w-full ">
                        <div class="tweet-info">
                            <div class="user-info flex gap-1">
                                <p class="font-bold dark:text-white">Name</p>
                                <p class="text-gray-500">@username</p>
                                <p class="text-gray-500">•</p>
                                <p class="text-gray-500">
                                    {{ $tweet->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="tweet-delete"
                                class="box-tweet-delete hidden shadow-box absolute z-10 p-4 right-[0px] rounded-lg shadow-xl dark:bg-black w-[200px]">
                                <form action="/tweet" method="del" class="tweet-delete flex items-center">
                                    <button type="submit" class="flex items-center">
                                        <ion-icon class="text-red-600 font-bold mr-2" name="trash"></ion-icon>
                                        <p class=" text-red-600 font-bold">Delete</p>
                                    </button>
                                </form>

                            </div>

                            <button id="button-show-box"
                                class="cursor-pointer right-0 absolute rounded-full text-gray-400 hover:text-tweetBackground/20 hover:bg-tweetBackground/20 p-2">
                                <ion-icon name="ellipsis-horizontal"></ion-icon>
                            </button>
                        </div>
                    </div>

                    <div class="tweet-content">
                        <p class="content dark:text-white mb-2">
                            {{ $tweet->content }}
                        </p>
                        <img class="rounded-2xl w-full" src={{ URL::asset('assets/img/x_avatar.png') }} alt="">
                    </div>

                    <div class="tweet-stats mt-2">
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-1 text-lg">
                                <ion-icon class="text-gray-400" name="chatbubble-outline"></ion-icon>
                                <p class="text-gray-400">0</p>
                            </div>

                            <div class="flex items-center gap-1 text-lg">
                                <ion-icon class="text-gray-400" name="repeat-outline"></ion-icon>
                                <p class="text-gray-400">0</p>
                            </div>

                            <div class="flex items-center gap-1 text-lg">
                                <ion-icon class="text-gray-400" name="heart-outline"></ion-icon>
                                <p class="text-gray-400">{{ $tweet->likes }}</p>
                            </div>

                            <div class="flex text-lg gap-4">
                                {{-- bookmark --}}
                                <ion-icon class="text-gray-400" name="bookmark-outline"></ion-icon>

                                {{-- share --}}
                                <ion-icon class="text-gray-400" name="share-social-outline"></ion-icon>
                            </div>
                        </div>
                    </div>

                </div>

            </article>
        @endforeach
        <div class="w-full flex justify-center p-4">
            {{ $tweets->links('layout.custom-pagination') }}
        </div>
    </div>

</div>
