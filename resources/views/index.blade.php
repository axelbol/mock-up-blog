@extends('layouts.main')

@section('content')
    <div class="container max-w-4xl mx-auto mt-8 text-center">
        <div class="max-w-xl mx-auto">
            <h1 class="text-4xl">
                Latest <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block"><span class="relative text-white"> Laravel </span></span><span class="text-blue-500"> From Scratch </span> News
            </h1>
            <h2 class="inline-flex mt-4">by Lary Laracore <img src="{{ asset('img/lary-head.svg') }}" alt="Lary Head" class="motion-safe:animate-bounce"></h2>
            <p class="text-sm mt-10">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias rerum reprehenderit voluptates expedita quae at odit sapiente vel impedit, excepturi nemo debitis laboriosam rem harum exercitationem officia amet mollitia eos?
            </p>
            <div class="flex items-center justify-center mt-8">
                <div class="relative">
                    <input type="text" name="" id="" class="bg-gray-800 text-sm rounded-full w-64 px-3 pl-8 py-1" placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container max-w-6xl mx-auto mt-12 md:mt-20 space-y-6">
        <div class="recently-post-container bg-gray-100 border border-red-700 border-opacity-50 rounded-xl hover:opacity-75 transition ease-in-out duration-700">
            <div class="p-6 lg:flex flex-row justify-between">
                <div class="flex-1 lg:mr-8">
                    <img src="{{ asset('img/illustration-1.png') }}" alt="illustration" class="rounded-xl">
                </div>
                <div class="flex-1 flex flex-col justify-between mt-8 lg:mt-0">
                    <div class="space-x-2">
                        <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-500 text-xs uppercase font-semibold">Techniques</a>
                        <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-500 text-xs uppercase font-semibold">Updates</a>
                    </div>
                    <div class="mt-4">
                        <div class="text-cyan-600 tracking-wide font-semibold text-3xl text-left">This is a big title and it will look great on two or even three lines. Woohoo!</div>
                        <span class="mt-2 block text-gray-800 text-xs">
                            Published <time>1 day ago</time>
                        </span>
                    </div>
                    <div class="text-neutral-800 tracking-wide text-sm mt-2 text-justify">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dolor velit officia quis iusto dolorum cumque voluptatum reprehenderit totalique beatae nihil ipsa! Saepe magni doloribus magnam cupiditate ipsum quis sint.</p>
                        <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolore et eveniet saepe aliquam dolor facere maxime! Vero ratione atque ad distinctio</p>
                    </div>
                    <div class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="{{ asset('img/lary-avatar.svg') }}" alt="lary avatar">
                            <div class="ml-3 text-fuchsia-600">
                                <h5 class="font-bold">Lary Laracore</h5>
                                <h6>Mascot at Laracasts</h6>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <a href="#" class="text-xs font-semibold bg-blue-600 ml-3 rounded-full py-3 px-8 hover:bg-blue-700 transition ease-in-out duration-150">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end recently post container -->

        <div class="secondary-post-container lg:grid lg:grid-cols-2">
            @for ($i = 0; $i < 2; $i++)
                <div class="bg-gray-100 border border-red-700 border-opacity-50 rounded-xl hover:opacity-75 transition ease-in-out duration-700">
                    <div class="p-6">
                        <div class="">
                            <img src="{{ asset('img/illustration-2.png') }}" alt="illustration" class="rounded-xl">
                        </div>
                        <div class="flex flex-col justify-between mt-8 md:mt-0">
                            <div class="space-x-2">
                                <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-500 text-xs uppercase font-semibold">Techniques</a>
                                <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-500 text-xs uppercase font-semibold">Updates</a>
                            </div>
                            <div class="mt-4">
                                <div class="text-cyan-600 tracking-wide font-semibold text-3xl text-left">This is a big title and it will look great on two or even three lines. Woohoo!</div>
                                <span class="mt-2 block text-gray-800 text-xs">
                                    Published <time>1 day ago</time>
                                </span>
                            </div>
                            <div class="text-neutral-800 tracking-wide text-sm mt-4 text-justify">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dolor velit officia quis iusto dolorum cumque voluptatum reprehenderit totalique beatae nihil ipsa! Saepe magni doloribus magnam cupiditate ipsum quis sint.</p>
                                <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolore et eveniet saepe aliquam dolor facere maxime! Vero ratione atque ad distinctio</p>
                            </div>
                            <div class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="{{ asset('img/lary-avatar.svg') }}" alt="lary avatar">
                                    <div class="ml-3 text-fuchsia-600">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <a href="#" class="text-xs font-semibold bg-blue-600 ml-3 rounded-full py-3 px-8 hover:bg-blue-700 transition ease-in-out duration-150">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div> <!-- end secondary post container -->

        <div class="third-post-container lg:grid lg:grid-cols-3">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-gray-100 border border-red-700 border-opacity-50 rounded-xl hover:opacity-75 transition ease-in-out duration-700">
                    <div class="p-6">
                        <div class="">
                            <img src="{{ asset('img/illustration-3.png') }}" alt="illustration" class="rounded-xl">
                        </div>
                        <div class="flex flex-col justify-between mt-8">
                            <div class="space-x-2">
                                <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-500 text-xs uppercase font-semibold">Techniques</a>
                                <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-500 text-xs uppercase font-semibold">Updates</a>
                            </div>
                            <div class="mt-4">
                                <div class="text-cyan-600 tracking-wide font-semibold text-3xl text-left">This is a big title and it will look great on two or even three lines. Woohoo!</div>
                                <span class="mt-2 block text-gray-800 text-xs">
                                    Published <time>1 day ago</time>
                                </span>
                            </div>
                            <div class="text-neutral-800 tracking-wide text-sm mt-4 text-justify">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dolor velit officia quis iusto dolorum cumque voluptatum reprehenderit totalique beatae nihil ipsa! Saepe magni doloribus magnam cupiditate ipsum quis sint.</p>
                                <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolore et eveniet saepe aliquam dolor facere maxime! Vero ratione atque ad distinctio</p>
                            </div>
                            <div class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="{{ asset('img/lary-avatar.svg') }}" alt="lary avatar">
                                    <div class="ml-3 text-fuchsia-600">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <a href="#" class="text-xs font-semibold bg-blue-600 ml-3 rounded-full py-3 px-8 hover:bg-blue-700 transition ease-in-out duration-150">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div> <!-- end third post container -->

    </div> <!-- end main container -->
@endsection
