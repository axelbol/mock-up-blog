<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Blog</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="px-12 py-8 bg-gray-800 text-white">
        <header class="border-b border-gray-600">
            <nav class="flex justify-between items-center pb-8">
                <div>
                    <a href="#">
                        <img src="{{ asset('img/logo.svg') }}" alt="logo" class="w-40">
                    </a>
                </div>
                <div class="uppercase">
                    <a href="#" class="text-xs font-bold hover:text-gray-300">Home</a>
                    <a href="#" class="text-xs font-semibold bg-blue-600 ml-3 rounded-full py-3 px-5 hover:bg-blue-700 transition ease-in-out duration-150">Subscribe for updates</a>
                </div>
            </nav>
        </header>

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="border-t border-gray-600">
            <div class="mt-10">
                <section class="bg-gray-900 border border-red-700 border-opacity-50 rounded-xl">
                    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                        <div class="mx-auto max-w-screen-md sm:text-center">
                            <h2 class="mb-4 text-3xl tracking-tight font-bold sm:text-4xl text-white">Sign up for our newsletter</h2>
                            <p class="mx-auto mb-8 max-w-2xl font-light text-gray-400 md:mb-12 sm:text-xl">Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.</p>
                            <form action="#">
                                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                                    <div class="relative w-full">
                                        <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900">Email address</label>
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                        </div>
                                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-700 rounded-lg border border-gray-600 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 placeholder-gray-400" placeholder="Enter your email" type="email" id="email" required="">
                                    </div>
                                    <div>
                                        <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-blue-800 transition ease-in-out duration-150 focus:ring-4 focus:ring-primary-300 focus:ring-primary-800">Subscribe</button>
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

            <div class="container mx-auto px-4 py-6">
                Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
            </div>
        </footer>
    </body>
</html>
