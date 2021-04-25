<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div
        x-data
        @click="

            const clicked = $event.target
            const target = clicked.tagName.toLowerCase()

            const ignores = ['button', 'svg', 'path', 'a']

            if (! ignores.includes(target)){
                clicked.closest('.idea-container').querySelector('.idea-link').click()
            }
        "
        class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer"
        >

        <div class="border-r hidden md:block border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">{{ $idea->votes_count }}</div>
                <div class="text-gray-500">Votes</div>
            </div>

            <div class="mt-8"><button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
            <div class="flex-none mx-4 md:mx-0">
                <a href="#">
                    <img src="{{ $idea->user->avatar }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full flex flex-col justify-between">
                <h4 class="text-xl font-semibold mt-2 md:mt-0">
                    <a class="idea-link hover:underline" href="{{ route('idea.show', $idea) }}">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-500 mt-3 line-clamp-3">
                    {{ $idea->description }}
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div
                        x-data="{isOpen:false}"
                        class="flex items-center space-x-2">
                        <div class="mt-4 md:mt-0 {{ $idea->getStatusClasses() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            {{ $idea->status->name }}
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative mt-4 md:mt-0 bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-3">
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
                                class="absolute text-left w-44 font-semibold bg-white rounded-xl shadow-lg py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Delete Post</a>
                                </li>
                                </ul>
                        </button>
                    </div>

                    <div class="md:hidden flex items-center mt-4 md:mt-0">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none">{{ $idea->votes_count }}</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">
                                    Votes
                                </div>
                            </div>
                            <button class="w-20 bg-gray-200 -mx-5  border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3">
                                Vote
                            </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
