@extends('layouts.main')

@section('content')
    <div class="container max-w-4xl mx-auto mt-2 md:mt-8 text-center"> <!-- info-container -->
        <div class="max-w-xl mx-auto">
            <h1 class="text-4xl">
                Latest <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-green-500 relative inline-block"><span class="relative text-white"> News </span></span><span class="text-blue-500"> From the Web </span> 2023
            </h1>
            <h2 class="flex justify-center items-center mt-4">by Dot Coding <img src="{{ asset('img/head.svg') }}" alt="Head" class="ml-1 motion-safe:animate-bounce"></h2>
            <p class="text-md md:text-sm mt-8 text-ellipsis text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias rerum reprehenderit voluptates expedita quae at odit sapiente vel impedit, excepturi nemo debitis laboriosam rem harum exercitationem officia amet mollitia eos? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur earum sapiente quam repudiandae minima natus vero dolor rem molestias blanditiis assumenda ratione mollitia delectus molestiae, ex dolores, a, numquam unde.
            </p>

            <div class="flex items-center justify-center mt-8"> <!-- search -->
                <div class="relative">
                    <input type="search" name="" id="" class="bg-gray-800 placeholder-gray-500 text-sm rounded-full w-full pl-8 py-1" placeholder="Buscar...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
                    </div>
                </div>
            </div> <!-- end-search -->
        </div>
    </div> <!-- end-info-container -->

    <div class="main-container max-w-5xl mx-auto mt-12 md:mt-20 space-y-6"> <!-- main-container -->
        <div class="recently-post-container bg-gray-200 rounded-xl border border-green-800 hover:shadow-md hover:shadow-green-700 transition ease-in-out duration-150 cursor-pointer"> <!-- recently-post-container -->
            <div class="p-8 md:flex flex-row justify-between">
                <div class="flex-1 md:mr-8">
                    <img src="{{ asset('img/blog/http.jpg') }}" alt="illustration" class="w-full rounded-xl">
                </div>
                <div class="flex-1 flex flex-col justify-between mt-8 md:mt-0">
                    <div class="space-x-2">
                        <button class="bg-fuchsia-600 hover:bg-fuchsia-700 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Updates</button>
                        <button class="bg-orange-500 hover:bg-orange-600 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Techniques</button>
                    </div>
                    <div class="mt-4">
                        <div class="text-cyan-800 tracking-wide font-semibold text-3xl text-left">This is a big title and it will look great on two or even three lines. Woohoo!</div>
                        <div class="mt-2 flex flex-col md:flex-row md:items-center text-xs font-semibold md:space-x-2 space-y-2 md:space-y-0">
                            <div class="text-black">Published 1 day ago</div>
                            <div class="hidden md:block text-gray-800">&bull;</div>
                            <div class="text-gray-500">3 Comments</div>
                        </div>
                    </div>
                    <div class="text-gray-800 tracking-wider text-lg md:text-sm mt-3 text-justify line-clamp-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dolor velit officia quis iusto dolorum cumque voluptatum reprehenderit totalique beatae nihil ipsa! Saepe magni doloribus magnam cupiditate ipsum quis sint.</p>
                        <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolore et eveniet saepe aliquam dolor facere maxime! Vero ratione atque ad distinctio</p>
                    </div>
                    <div class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <img src="{{ asset('img/lary-avatar.svg') }}" alt="lary avatar" class="w-14 h-14 rounded-xl">
                            <div class="ml-3">
                                <h5 class="text-cyan-900 font-bold">Mat Core</h5>
                                <h6 class="text-cyan-800">Head of content</h6>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <a href="#" class="text-xxs font-semibold bg-blue-600 ml-3 rounded-full py-2 px-6 hover:bg-blue-800 transition ease-in-out duration-150">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end-recently-post-container -->

        <div class="secondary-post-container md:grid md:grid-cols-2 gap-x-2 space-y-2 md:space-y-0">
            @for ($i = 0; $i < 2; $i++)
                <div class="bg-gray-200 rounded-xl border border-green-800 hover:shadow-md hover:shadow-green-700 transition ease-in-out duration-700 cursor-pointer">
                    <div class="p-6">
                        <div>
                            <img src="{{ asset('img/blog/Composer.png') }}" alt="illustration" class="rounded-xl">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div class="space-x-2 mt-4">
                                <button class="bg-fuchsia-600 hover:bg-fuchsia-700 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Updates</button>
                                <button class="bg-orange-500 hover:bg-orange-600 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Techniques</button>
                            </div>
                            <div class="mt-4">
                                <div class="text-cyan-800 tracking-wide font-semibold text-3xl text-left">This is a big title and it will look great on two or even three lines. Woohoo!</div>
                                <div class="mt-2 flex flex-col md:flex-row md:items-center text-xs font-semibold md:space-x-2 space-y-2 md:space-y-0">
                                    <div class="text-black">Published 1 day ago</div>
                                    <div class="hidden md:block text-gray-800">&bull;</div>
                                    <div class="text-gray-500">3 Comments</div>
                                </div>
                            </div>
                            <div class="text-gray-800 tracking-wider text-lg md:text-sm mt-3 text-justify line-clamp-6">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dolor velit officia quis iusto dolorum cumque voluptatum reprehenderit totalique beatae nihil ipsa! Saepe magni doloribus magnam cupiditate ipsum quis sint.</p>
                                <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolore et eveniet saepe aliquam dolor facere maxime! Vero ratione atque ad distinctio</p>
                            </div>
                            <div class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="{{ asset('img/lary-avatar.svg') }}" alt="lary avatar" class="w-14 h-14 rounded-xl">
                                    <div class="ml-3">
                                        <h5 class="text-cyan-900 font-bold">Sara Colg</h5>
                                        <h6 class="text-cyan-800">Publisher</h6>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <a href="#" class="text-xxs font-semibold bg-blue-600 ml-3 rounded-full py-2 px-6 hover:bg-blue-800 transition ease-in-out duration-150">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div> <!-- end secondary post container -->

        <div class="third-post-container md:grid md:grid-cols-3 gap-x-2 space-y-2 md:space-y-0">
            @for ($i = 0; $i < 3; $i++)
                <div class="bg-gray-200 rounded-xl border border-green-800 hover:shadow-md hover:shadow-green-700 transition ease-in-out duration-150 cursor-pointer">
                    <div class="p-6">
                        <div>
                            <img src="{{ asset('img/blog/matrix.jpg') }}" alt="illustration" class="rounded-xl">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div class="space-x-2 mt-4">
                                <button class="bg-fuchsia-600 hover:bg-fuchsia-700 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Updates</button>
                                <button class="bg-orange-600 hover:bg-orange-600 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Techniques</button>
                            </div>
                            <div class="mt-4">
                                <div class="text-cyan-800 tracking-wide font-semibold text-3xl text-left">This is a big title and it will look great on two or even three lines. Woohoo!</div>
                                <div class="mt-2 flex flex-col md:flex-row md:items-center text-xs font-semibold md:space-x-2 space-y-2 md:space-y-0">
                                    <div class="text-black">Published 1 day ago</div>
                                    <div class="hidden md:block text-gray-800">&bull;</div>
                                    <div class="text-gray-500">3 Comments</div>
                                </div>
                            </div>
                            <div class="text-gray-800 tracking-wider text-lg md:text-sm mt-3 text-justify line-clamp-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nulla dolor velit officia quis iusto dolorum cumque voluptatum reprehenderit totalique beatae nihil ipsa! Saepe magni doloribus magnam cupiditate ipsum quis sint.</p>
                                <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dolore et eveniet saepe aliquam dolor facere maxime! Vero ratione atque ad distinctio</p>
                            </div>
                            <div class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="{{ asset('img/lary-avatar.svg') }}" alt="lary avatar" class="w-14 h-14 rounded-xl">
                                    <div class="ml-3">
                                        <h5 class="text-cyan-900 font-bold">Andrew Stein</h5>
                                        <h6 class="text-cyan-800">Publisher Junior</h6>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <a href="#" class="text-xxs font-semibold bg-blue-600 ml-3 rounded-full py-2 px-3 hover:bg-blue-800 transition ease-in-out duration-150">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div> <!-- end third post container -->
    </div> <!-- end main container -->
@endsection
