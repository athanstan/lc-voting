<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="cateory" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category one">Category one</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
                <option value="Category four">Category four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter one">Filter one</option>
                <option value="Filter two">Filter two</option>
                <option value="Filter three">Filter three</option>
                <option value="Filter four">Filter four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">

            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-700">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            </div>

        </div>
    </div>


    <div class="ideas-container space-y-6 my-6">

        @foreach ($ideas as $idea)

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
            class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">

            <div class="border-r hidden md:block border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
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
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{isOpen:false}"
                            class="flex items-center space-x-2">
                            <div class="mt-4 md:mt-0 bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
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
                                    <div class="text-sm font-bold leading-none">12</div>
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

        @endforeach

    </div>

    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>
