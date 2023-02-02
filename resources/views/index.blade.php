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
@endsection
