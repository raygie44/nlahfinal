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

        <livewire:welcome.breadcrums />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-3xl font-bold font-mono">
                    {{ __("Core values") }}
                </div>
            </div>
        </div>


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Centering the grid container -->
                        <div class="flex justify-center">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-12"> <!-- Increased gap for more space between cards -->
                                <!-- First Card -->
                                <div class="max-w-sm rounded overflow-hidden shadow-lg p-6"> <!-- Padding inside card -->
                                    <div class="font-bold text-xl mb-4">Mission</div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>

                                <!-- Second Card -->
                                <div class="max-w-sm rounded overflow-hidden shadow-lg p-6"> <!-- Padding inside card -->
                                    <div class="font-bold text-xl mb-4">Vission</div>
                                    <p class="text-gray-700 text-base">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
