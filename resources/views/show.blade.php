@extends('layouts.main')

@section('content')
    <div class="container md:bg-gray-700 rounded-xl py-0 md:py-8 max-w-6xl mx-auto -mt-12 md:mt-8">
        <div class="max-w-4xl mx-auto md:grid md:grid-cols-12 gap-x-10 pt-10">
            <div class="md:col-span-4 text-left md:text-center">
                <img src="{{ asset('img/illustration-1.png') }}" alt="image" class="rounded-xl">

                <div class="mt-4 block text-gray-300 font-semibold text-xs">
                    Published 1 day ago
                </div>

                <div class="flex flex-row items-center md:justify-center text-sm mt-4">
                    <img src="img/lary-avatar.svg" alt="Lary Avatar" class="w-14 h-14 rounded-xl">
                    <div class="ml-3 text-left text-gray-300">
                        <h5 class="font-bold">Mat Core</h5>
                        <h6>Head of content</h6>
                    </div>
                </div>

                <div class="md:hidden mt-4 block text-gray-300 font-semibold text-xs">
                    Compartir publicación:
                </div>
                <ul class="flex flex-row items-center justify-center mt-2 md:mt-6">
                    <li>
                        <a href="#" title="Compartir en Facebook">
                            <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 448 512">
                            <path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z" />
                            </svg>
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" title="Instagram">
                            <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" title="Twitter">
                            <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 512 512">
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" title="Website">
                            <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 496 512">
                            <path d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 01-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 01-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 00-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 00-15.55-3.1l-31.17 10.39a11.95 11.95 0 00-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 018.93 21.57 46.536 46.536 0 01-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 010-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="md:col-span-8">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-start space-y-4 md:space-y-0 md:justify-between mt-1 md:-mt-10">
                    <a href="#" class="hidden relative md:inline-flex items-center text-sm hover:text-blue-400 transition duration-150 ease-in-out">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                        Back to posts
                    </a>
                    <div class="space-x-0 md:space-x-2 space-y-2 md:space-y-0 flex flex-col md:flex-row">
                        <button class="bg-fuchsia-600 hover:bg-fuchsia-700 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Updates</button>
                        <button class="bg-orange-500 hover:bg-orange-600 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Techniques</button>
                        <button class="bg-green-700 hover:bg-green-800 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Random</button>
                        <button class="bg-green-700 hover:bg-green-800 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in-out px-3 py-1">Random</button>
                    </div>
                </div>
                <h1 class="text-gray-200 font-bold text-4xl mt-6">This is a big title and it will look great on two or even three lines.</h1>
                <div class="space-y-5 text-xl md:text-lg text-justify tracking-wide">
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, fugiat sit quia dolorum quisquam nulla dolor ratione doloribus. Rem cupiditate porro blanditiis delectus reprehenderit magnam voluptas similique aut asperiores. Enim, quia, velit rem commodi incidunt officia id, perspiciatis accusantium suscipit sunt quae adipisci beatae a reprehenderit voluptatem repudiandae repellat? Quo.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ullam beatae exercitationem saepe repellat praesentium, at et voluptates! Dolorem, necessitatibus.</p>

                    <figure class="max-w-full">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/blog/img1.jpg') }}" alt="image description">
                        <figcaption class="mt-2 text-sm text-center text-gray-400">Image caption</figcaption>
                    </figure>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error architecto autem nobis in harum esse dolores. Rerum deleniti aut placeat animi possimus nam a ex, quo at? Magni, consectetur neque, quo esse rerum harum, consequuntur dolore doloremque dolores tempore corrupti est alias mollitia earum voluptates accusamus sapiente dicta vel voluptatum!</p>
                    <h2 class="font-bold text-xl md:text-lg">Lorem ipsum dolor sit amet.<h2/>

                    <figure class="max-w-full">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/blog/img.jpg') }}" alt="image description">
                        <figcaption class="mt-2 text-sm text-center text-gray-400">Image caption</figcaption>
                    </figure>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio necessitatibus quia, neque ex cupiditate in iusto sequi perspiciatis fugit illum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea optio beatae ad, consequatur ducimus dolorum tenetur dolore suscipit nostrum porro repellendus fugit fugiat asperiores est praesentium quas ipsa. Repellendus repudiandae iure, in voluptatum quas voluptate sunt, molestiae dolorum praesentium fugit esse eligendi. In omnis harum consequuntur pariatur dolorum laboriosam ratione?</p>
                    <h2 class="font-bold text-end text-sm">Lorem ipsum dolor sit amet.<h2/>

                    <div class="flex items-center justify-between mt-12">
                        <div class="flex">
                            <a href="#" class="relative inline-flex items-center text-xs hover:text-blue-400 transition duration-150 ease-in-out">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                                Back to posts
                            </a>
                        </div>
                        <ul class="flex items-center">
                            <li>
                                <a href="#" title="Compartir en Facebook">
                                    <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 448 512">
                                    <path d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="ml-6">
                                <a href="#" title="Instagram">
                                    <svg class="fill-current text-gray-400 hover:text-white w-4" viewBox="0 0 448 512">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
