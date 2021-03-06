<form wire:submit.prevent="createIdea" action="" class="space-y-4 px-4 py-6 ">
    <div>
        <input wire:model.defer="title" type="text" class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2"
        placeholder="Your idea" required>
        @error('title')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <select wire:model.defer="category" name="category_add" id="category_add" class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

        </select>
    </div>
    @error('category')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
    <div>
        <textarea wire:model.defer="description"  name="idea" id="idea" cols="30" rows="4" class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Describe your idea" required></textarea>
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
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
            Submit
        </button>
    </div>

    <div>
        @if (session('success_message'))

        <div
            x-data="{ isVisible: true }"
            x-init="
                setTimeout(() => {
                    isVisible = false
                }, 5000)
            "
            x-show.transition.duration.1000ms="isVisible"

            class="text-green-500 my-4">
            {{ session('success_message') }}
        </div>

        @endif
    </div>

</form>
