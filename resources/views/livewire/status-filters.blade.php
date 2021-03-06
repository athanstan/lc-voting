<div>
    {{-- Be like water. --}}
    <nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a wire:click.prevent="setStatus('All')"
                    href="" class="border-b-4 pb-3 @if ($status=="All") border-blue-500 text-gray-900 @endif hover:border-blue-500">
                    All ideas ({{ $statusCount['all_statuses'] }})
                </a>
            </li>
            <li><a wire:click.prevent="setStatus('Considering')"
                    href="" class="transition duration-150 ease-in border-b-4 pb-3 @if ($status=="Considering") border-blue-500 text-gray-900 @endif hover:border-blue-500">
                    Considering ({{ $statusCount['considering'] }})
                </a>
            </li>
            <li><a wire:click.prevent="setStatus('In Progress')"
                    href="" class="transition duration-150 ease-in border-b-4 pb-3 @if ($status=="In Progress") border-blue-500 text-gray-900 @endif hover:border-blue-500">
                    in progress ({{ $statusCount['in_progress'] }})
                </a>
            </li>
        </ul>

        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a wire:click.prevent="setStatus('Implemented')"
                    href="" class="transition duration-150 ease-in border-b-4 pb-3 @if ($status=="Implemented") border-blue-500 text-gray-900 @endif hover:border-blue-500">
                    Implemented ({{ $statusCount['implemented'] }})
                </a>
            </li>
            <li><a wire:click.prevent="setStatus('Closed')"
                    href="" class="transition duration-150 ease-in border-b-4 pb-3 @if ($status=="Closed") border-blue-500 text-gray-900 @endif hover:border-blue-500">
                    Closed ({{ $statusCount['closed'] }})
                </a>
            </li>
        </ul>
    </nav>
</div>
