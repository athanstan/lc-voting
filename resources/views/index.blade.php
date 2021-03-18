<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="cateory" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category one">Category one</option>
                <option value="Category two">Category two</option>
                <option value="Category three">Category three</option>
                <option value="Category four">Category four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter one">Filter one</option>
                <option value="Filter two">Filter two</option>
                <option value="Filter three">Filter three</option>
                <option value="Filter four">Filter four</option>
            </select>
        </div>
        <div class="w-2/3 relative">

            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-700">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            </div>

        </div>
    </div>


    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8"><button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a class="hover:underline" href="#">A random title goes here</a>
                    </h4>
                    <div class="text-gray-500 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloremque ex delectus expedita quas, non vel, molestias rerum soluta ipsa accusamus perferendis facilis harum aperiam tenetur laborum. Accusantium, quibusdam. Vel, voluptates? Non unde, eaque doloribus praesentium ut sint ea laboriosam quos vitae eum, ab in. Non quis ratione enim? Consequuntur!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div>3 Comments</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
