@extends('layouts.main')

@section('content')
<div class="container text-center max-w-4xl mx-auto px-12">
    <h1 class="text-4xl">
        Latest <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block"><span class="relative text-white"> Laravel </span></span><span class="text-blue-500"> From Scratch </span> News
    </h1>
    <h2 class="inline-flex mt-4">by Lary Laracore <img src="{{ asset('img/lary-head.svg') }}" alt="Lary Head" class="motion-safe:animate-bounce"></h2>
</div>
@endsection
