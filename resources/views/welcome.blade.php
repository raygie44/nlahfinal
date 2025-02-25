<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NLAH</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-gray-100">
                    <header class="">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
                    <main class="mt-6">  
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                                <div class="p-6 text-gray-900 text-3xl font-bold font-mono">
                                    {{ __("Healing starts here") }}
                                </div>
                            </div>
                        </div>

                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">
                                    <!-- Grid Container with 4 Columns and 2 Rows -->
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                        <!-- First Card -->
                                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                                            <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2">Our Services</div>
                                                <p class="text-gray-700 text-base">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                                </p>
                                            </div>
                                            <div class="px-6 pt-4 pb-2">
                                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Button</button>
                                            </div>
                                        </div>
                        
                                        <!-- Second Card -->
                                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                            <img class="w-full" src="/img/card-top.jpg" alt="Events">
                                            <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2">News & Events</div>
                                                <p class="text-gray-700 text-base">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                                </p>
                                            </div>
                                            <div class="px-6 pt-4 pb-2">
                                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Button</button>
                                            </div>
                                        </div>
                        
                                        <!-- Third Card -->
                                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                                            <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2">About us</div>
                                                <p class="text-gray-700 text-base">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                                </p>
                                            </div>
                                            <div class="px-6 pt-4 pb-2">
                                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Button</button>
                                            </div>
                                        </div>
                        
                                        <!-- Fourth Card -->
                                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                            <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                                            <div class="px-6 py-4">
                                                <div class="font-bold text-xl mb-2">Our services</div>
                                                <p class="text-gray-700 text-base">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                                </p>
                                            </div>
                                            <div class="px-6 pt-4 pb-2">
                                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        

                        
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
