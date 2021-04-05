<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-100">
        <header class="flex flex-col md:flex-row items-center md:justify-between px-8 py-4">
            <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
            <div class="flex items-center mt-2 md:mt-0">
                @if (Route::has('login'))
                    <div class="px-6 py-4 sm:block">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img    class="w-10 h-10 rounded-full flex"
                            src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" alt="avatar">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
            <div class="w-70 mx-auto md:mx-0 md:mr-5" >
               <div class="bg-white border-2 border-blue rounded-xl mt-16 md:sticky md:top-8">
                    <div class="text-center px-6 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <div class="text-sm mt-4">Tell us what you like and we'll take a look over!</div>

                        <form action="" class="space-y-4 px-4 py-6 ">
                            <div>
                                <input type="text" class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your idea">
                            </div>
                            <div>
                                <select name="category_add" id="category_add" class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2">
                                    <option value="Category one">Category one</option>
                                    <option value="Category two">Category two</option>
                                    <option value="Category three">Category three</option>
                                    <option value="Category four">Category four</option>
                                </select>
                            </div>
                            <div>
                                <textarea  name="idea" id="idea" cols="30" rows="4" class="w-full text-sm border-none bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Describe your idea"></textarea>
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
                        </form>
                    </div>
               </div>
            </div>
            <div class="w-full px-2 md:px-0 md:w-175" >
                <nav class="hidden md:flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="" class="border-b-4 pb-3 border-blue-500">All ideas (87)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Considering (6)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">in progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Implemented (10)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
