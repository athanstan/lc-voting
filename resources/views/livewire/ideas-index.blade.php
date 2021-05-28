<div>
    {{-- Success is as dangerous as failure. --}}
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

        @livewire('index-idea', ['idea' => $idea], key($idea->id))

        @endforeach

    </div>

    <div class="my-8">
        {{-- {{ $ideas->links() }} --}}
        {{ $ideas->appends(request()->query())->links() }}
    </div>
</div>
