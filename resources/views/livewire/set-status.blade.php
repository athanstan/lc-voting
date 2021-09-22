<div>
    {{-- Success is as dangerous as failure. --}}
    <div
        class="relative"
        x-data="{isOpen:false}"
        {{-- x-on:statusWasUpdated.window="isOpen= false;" --}}
        x-init="
            window.livewire.on('statusWasUpdated', () => {
                isOpen = false
            })
        "
        >
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
            <form wire:submit.prevent='setStatus' class="space-y-4 px-4 py-6">
                <div class="mt-4 space-y-4">

                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model='status' name="status" value="1" checked class="bg-gray-200 text-gray-600 border-none">
                            <span class="ml-2">Open</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model='status' name="status" value="2" checked class="bg-gray-200 text-yellow-600 border-none">
                            <span class="ml-2">Considering</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model='status' name="status" value="3" checked class="bg-gray-200 text-purple-600 border-none">
                            <span class="ml-2">In Progress</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model='status' name="status" value="4" checked class="bg-gray-200 text-green-600 border-none">
                            <span class="ml-2">Implemented</span>
                        </label>
                    </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" wire:model='status' name="status" value="5" checked class="bg-gray-200 text-red-600 border-none">
                            <span class="ml-2">Closed</span>
                        </label>
                    </div>

                    {{-- <div class="flex items-center">
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
                    </div> --}}
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
                    <button type="submit" class="flex items-center h-11 w-1/2 justify-center text-white text-xs font-semibold rounded-xl bg-blue-500 border border-blue-500 hover:border-blue-800 py-3  transition duration-150 ease-in disabled:opacity-50">
                        Update
                    </button>
                </div>
                <div>
                    <label class="font-normal inline-flex items-center">
                        <input wire:model='notifyAllVoters' type="checkbox" class="rounded bg-gray-200 border-none" name="notify_voters"/>
                        <span  class="ml-2">Notify All Voters</span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
