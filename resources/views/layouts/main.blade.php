<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Blog</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="px-8 md:px-28 py-8 bg-gray-800 text-gray-100">
        <header class="border-b border-gray-600">
            <nav class="md:flex md:justify-between md:items-center pb-8">
                <div>
                    <a href="#">
                        <img src="{{ asset('img/three-removebg-preview.png') }}" alt="logo" class="w-40">
                    </a>
                </div>
                <div
                    x-data="{ isOpen: false }"
                    class="mt-6 md:mt-0 uppercase flex flex-col md:flex-row md:justify-between items-start md:items-center space-y-3 md:space-y-0 md:space-x-6"
                >
                    <a href="#" class="text-xs font-bold hover:text-blue-400 transition ease-in-out duration-150">Home</a>
                    <a href="#" class="text-xs font-bold hover:text-blue-400 transition ease-in-out duration-150">Ideas</a>
                    <a href="#" class="text-xs font-semibold bg-blue-600 rounded-lg md:rounded-full py-3 px-5 hover:bg-blue-700 transition ease-in-out duration-150">Subscribe for updates</a>
                    <div
                        @click="isOpen = !isOpen"
                        class="relative"
                    >
                        <button class="md:block">
                            <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" alt="avatar" class="w-10 h-10 rounded-full">
                        </button>
                        <div
                            x-cloak
                            x-show="isOpen"
                            x-transition
                            @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="px-4 py-6 absolute z-10 w-40 text-left font-semibold text-sm bg-white shadow-green-600 shadow-lg rounded-xl mt-2 md:top-10 md:right-0"
                        >
                            @if (Route::has('login'))
                                <div class="flex flex-col space-y-2">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 hover:text-blue-700 transition duration-150 ease-in-out">Dashboard</a>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" class="text-sm text-gray-700 hover:text-blue-700 transition duration-150 ease-in-out"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-blue-700 transition duration-150 ease-in-out">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-blue-700 transition duration-150 ease-in-out">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="md:border-t md:border-gray-600">
            <div class="mt-4 md:mt-10">
                <section class="bg-gray-900 rounded-2xl">
                    <div class="py-8 px-4 mx-auto max-w-screen-xl md:py-16 md:px-6">
                        <div class="mx-auto max-w-screen-md md:text-center">
                            <h2 class="mb-4 text-3xl tracking-tight font-bold md:text-4xl text-white">Sign up for our newsletter</h2>
                            <p class="mx-auto mb-8 max-w-2xl font-light text-gray-400 md:mb-12 md:text-xl">Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.</p>
                            <form action="#">
                                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm md:flex md:space-y-0">
                                    <div class="relative w-full">
                                        <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900">Email address</label>
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                        </div>
                                        <input class="block p-3 pl-10 w-full text-sm text-gray-300 bg-gray-700 rounded-lg border border-gray-600 md:rounded-none md:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400" placeholder="Enter your email" type="email" id="email" required="">
                                    </div>
                                    <div>
                                        <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-700 border-primary-600 md:rounded-none md:rounded-r-lg hover:bg-blue-800 transition ease-in-out duration-150 focus:ring-4 focus:ring-primary-300 focus:ring-primary-800">Subscribe</button>
                                    </div>
                                </div>
                                <div class="mx-auto max-w-screen-sm text-sm text-left text-gray-300 newsletter-form-footer">We care about the protection of your data.
                                    <a href="#" class="font-medium text-primary-500 hover:underline">Read our Privacy Policy</a>.
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container mx-auto px-4 py-6 text-gray-300">
                Powered by <a href="#" class="hover:text-gray-100 hover:underline">Dot Code</a> <span class="text-yellow-500"> | </span>Feel free to use it
            </div>
        </footer>
    </body>
</html>
