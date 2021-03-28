<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">
                All Ideas
            </span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">

        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a class="hover:underline" href="#">A random title goes here</a>
                </h4>
                <div class="text-gray-500 mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloremque ex delectus expedita quas, non vel, molestias rerum soluta ipsa accusamus perferendis facilis harum aperiam tenetur laborum. Accusantium, quibusdam. Vel, voluptates? Non unde, eaque doloribus praesentium ut sint ea laboriosam quos vitae eum, ab in. Non quis ratione enim? Consequuntur!
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900 text-sm"> Moxiaris Moxos</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-3">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="5" cy="12" r="1"></circle>
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                             </svg>
                             <ul class="hidden absolute text-left w-44 font-semibold bg-white rounded-xl shadow-lg py-3 ml-8">
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
            <button type="button"
                    class="flex items-center h-11 w-32 justify-center text-white text-xs font-semibold rounded-xl bg-blue-500 border border-blue-500 hover:border-blue-800 py-3  transition duration-150 ease-in">
                Reply
            </button>
            <button type="button" class="flex items-center h-11 w-36 justify-center text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 py-3 px-6 transition duration-150 ease-in">
                <span>Set Status</span>
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug font-semibold">
                    12
                    <div class="text-gray-400 text-xs leading-none">
                        Votes
                    </div>
                </div>
            </div>
            <button type="button" class=" h-11 w-32 justify-center text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 py-3 px-6 transition duration-150 ease-in">
                <span class="uppercase">Vote</span>
            </button>
        </div> {{-- Button Container --}}

    </div> {{-- End of Buttons container --}}

    <div class="comments-container relative space-y-6 py-4 my-8 ml-22">
        <div class="comment-container relative bg-white rounded-xl ml-16 flex mt-4">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a class="hover:underline" href="#">A random title goes here</a>
                    </h4> --}}
                    <div class="text-gray-500 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloremque ex delectus expedita quas, non vel, molestias rerum soluta ipsa accusamus perferendis facilis harum aperiam tenetur laborum. Accusantium, quibusdam. Vel, voluptates? Non unde, eaque doloribus praesentium ut sint ea laboriosam quos vitae eum, ab in. Non quis ratione enim? Consequuntur!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900 text-sm"> Moxiaris Moxos</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">

                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-3">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="5" cy="12" r="1"></circle>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                 </svg>
                                 <ul class="hidden absolute text-left w-44 font-semibold bg-white rounded-xl shadow-lg py-3 ml-8">
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

        </div>
        <div class="is-admin comment-container relative bg-white rounded-xl ml-16 flex mt-4">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue-500 font-bold text-xxs mt-1">Admin</div>
                </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a class="hover:underline" href="#">Status Changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-500 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloremque ex delectus expedita quas, non vel, molestias rerum soluta ipsa accusamus perferendis facilis harum aperiam tenetur laborum. Accusantium, quibusdam. Vel, voluptates? Non unde, eaque doloribus praesentium ut sint ea laboriosam quos vitae eum, ab in. Non quis ratione enim? Consequuntur!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue-500 text-sm"> Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">

                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-3">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="5" cy="12" r="1"></circle>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                 </svg>
                                 <ul class="hidden absolute text-left w-44 font-semibold bg-white rounded-xl shadow-lg py-3 ml-8">
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

        </div>
        <div class="comment-container relative bg-white rounded-xl ml-16 flex mt-4">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="mx-4 w-full">
                    {{-- <h4 class="text-xl font-semibold">
                        <a class="hover:underline" href="#">A random title goes here</a>
                    </h4> --}}
                    <div class="text-gray-500 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloremque ex delectus expedita quas, non vel, molestias rerum soluta ipsa accusamus perferendis facilis harum aperiam tenetur laborum. Accusantium, quibusdam. Vel, voluptates? Non unde, eaque doloribus praesentium ut sint ea laboriosam quos vitae eum, ab in. Non quis ratione enim? Consequuntur!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900 text-sm"> Moxiaris Moxos</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">

                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-3">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="5" cy="12" r="1"></circle>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                 </svg>
                                 <ul class="hidden absolute text-left w-44 font-semibold bg-white rounded-xl shadow-lg py-3 ml-8">
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

        </div>
    </div>{{-- End of comments container --}}
</x-app-layout>
