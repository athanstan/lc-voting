<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="idea-container bg-white rounded-xl flex mt-4">

        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="{{ $idea->user->avatar }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a class="hover:underline" href="#">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-500 mt-3">
                    {{ $idea->description }}
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900 text-sm">  {{ $idea->user->name }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div
                        x-data="{isOpen:false}"
                        class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            {{ $idea->status->name }}
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-3">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="5" cy="12" r="1"></circle>
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                             </svg>
                             <ul
                                x-cloak
                                x-show.transition.origin.top.left.duration.300ms="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute text-left w-44 font-semibold bg-white rounded-xl shadow-lg py-3 ml-8">
                                 <li>
                                     <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as Spam</a>
                                    </li>
                                 <li>
                                     <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Delete Post</a>
                                </li>
                             </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div> {{-- End idea Container --}}

    </div> {{-- End of idea container --}}

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-3 ml-6">
            <div x-data="{isOpen:false}" class="relative">
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center h-11 w-32 justify-center text-white text-sm font-semibold rounded-xl bg-blue-500 border border-blue-500 hover:border-blue-800 py-3  transition duration-150 ease-in">
                    Reply
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left.duration.300ms="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left text-sm font-semibold bg-white shadow rounded-xl mt-2">
                    <form action="" class="space-y-4 px-4 py-6">
                        <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, Don't be shy. Share your thoughts..."
                        ></textarea>
                        <div class="flex items-center space-x-3">
                            <button type="button"
                                    class="flex items-center h-11 w-1/2 justify-center text-white text-sm font-semibold rounded-xl bg-blue-500 border border-blue-500 hover:border-blue-800 py-3  transition duration-150 ease-in">
                                Post Comment
                            </button>
                            <button type="button" class="flex items-center h-11 w-32 justify-center text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 py-3 px-6 transition duration-150 ease-in">
                                <svg class="w-4 text-gray-600 transform -rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div x-data="{isOpen:false}" class="relative">
                <button
                    @click="isOpen = !isOpen"
                    type="button" class="flex items-center h-11 w-36 justify-center text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 py-3 px-6 transition duration-150 ease-in">
                    <span>Set Status</span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                </button>

                <div
                    x-cloak
                    x-show.transition.origin.top.left.duration.300ms="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class=" absolute z-10 w-72 text-left text-sm font-semibold bg-white shadow rounded-xl mt-2">
                    <form action="" class="space-y-4 px-4 py-6">
                        <div class="mt-4 space-y-4">
                            <div class="flex items-center">
                                <input id="push_everything" name="push_notifications" type="radio" class="bg-gray-200 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-none">
                                <label for="push_everything" class="ml-3 block text-sm font-medium text-gray-700">
                                Everything
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="push_email" name="push_notifications" type="radio" class="bg-gray-200 focus:ring-indigo-500 h-4 w-4 text-yellow-600 border-none">
                                <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">
                                Same as email
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="push_nothing" name="push_notifications" type="radio" class="bg-gray-200 focus:ring-indigo-500 h-4 w-4 text-green-600 border-none">
                                <label for="push_nothing" class="ml-3 block text-sm font-medium text-gray-700">
                                No push notifications
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="2"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                placeholder="Add an updated comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">

                            <button type="button" class="flex items-center h-11 justify-center text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 py-3 px-6 transition duration-150 ease-in">


                                <svg class="w-4 text-gray-600 transform -rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>


                                <span class="ml-1">Attach</span>

                            </button>
                            <button type="submit" class="flex items-center h-11 w-1/2 justify-center text-white text-xs font-semibold rounded-xl bg-blue-500 border border-blue-500 hover:border-blue-800 py-3  transition duration-150 ease-in">
                                Update
                            </button>
                        </div>
                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" class="rounded bg-gray-200 border-none" name="notify_voters" checked="" >
                                <span  class="ml-2">Notify All Voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl @if ($hasVoted) text-blue-500 @endif leading-snug font-semibold">
                    {{ $idea->votes_count }}
                    <div class="text-gray-400 text-xs leading-none">
                       Votes
                    </div>
                </div>
            </div>
            @if ($hasVoted)
                <button type="button" class=" h-11 w-32 justify-center text-white text-xs bg-blue-500 font-semibold rounded-xl border border-blue-200 hover:border-blue-400 py-3 px-6 transition duration-150 ease-in">
                    <span class="uppercase">Voted</span>
                </button>
            @else
                <button type="button" class=" h-11 w-32 justify-center text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 py-3 px-6 transition duration-150 ease-in">
                    <span class="uppercase">Vote</span>
                </button>
            @endif

        </div> {{-- Button Container --}}

    </div> {{-- End of Buttons container --}}

</div>
