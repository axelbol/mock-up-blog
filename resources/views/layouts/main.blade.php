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

        <footer>

        </footer>
    </body>
</html>
