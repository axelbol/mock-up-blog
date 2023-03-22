@extends('layouts.main')

@section('content')
    <div class="container max-w-6xl mx-auto mt-6 md:mt-20">
        <div class="max-w-4xl mx-auto md:grid md:grid-cols-12 gap-x-10 pt-10">
            <div class="col-span-4 text-center">
                <img src="{{ asset('img/illustration-1.png') }}" alt="image" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>1 day ago</time>
                </p>

                <div class="flex items-center justify-center text-sm mt-4">
                    <img src="img/lary-avatar.svg" alt="Lary Avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">Lary Laracore</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="flex justify-between -mt-10">
                    <a href="#" class="relative inline-flex items-center text-base hover:text-blue-500">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                        Back to posts
                    </a>
                    <div class="space-x-2">
                        <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-500 text-xs uppercase font-semibold">Techniques</a>
                        <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-500 text-xs uppercase font-semibold">Updates</a>
                    </div>
                </div>
                <h1 class="font-bold text-4xl mt-6">This is a big title and it will look great on two or even three lines.</h1>
                <div class="space-y-4 text-lg">
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, fugiat sit quia dolorum quisquam nulla dolor ratione doloribus. Rem cupiditate porro blanditiis delectus reprehenderit magnam voluptas similique aut asperiores. Enim, quia, velit rem commodi incidunt officia id, perspiciatis accusantium suscipit sunt quae adipisci beatae a reprehenderit voluptatem repudiandae repellat? Quo.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam beatae exercitationem saepe repellat praesentium, at et voluptates! Dolorem, necessitatibus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error architecto autem nobis in harum esse dolores. Rerum deleniti aut placeat animi possimus nam a ex, quo at? Magni, consectetur neque, quo esse rerum harum, consequuntur dolore doloremque dolores tempore corrupti est alias mollitia earum voluptates accusamus sapiente dicta vel voluptatum!</p>
                    <h2 class="font-bold text-lg">Lorem ipsum dolor sit amet.<h2/>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio necessitatibus quia, neque ex cupiditate in iusto sequi perspiciatis fugit illum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea optio beatae ad, consequatur ducimus dolorum tenetur dolore suscipit nostrum porro repellendus fugit fugiat asperiores est praesentium quas ipsa. Repellendus repudiandae iure, in voluptatum quas voluptate sunt, molestiae dolorum praesentium fugit esse eligendi. In omnis harum consequuntur pariatur dolorum laboriosam ratione?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container max-w-6xl mx-auto mt-12 space-y-6">


    </div> <!-- end main container -->
@endsection
