<nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-100 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center"> <!-- Added items-center for better alignment -->
            <div class="flex items-center space-x-4"> <!-- Added space-x-4 to create spacing between the logo and h1 -->
                <!-- Logo -->
                <div class="shrink-0">
                    <a href="{{ route('welcome') }}" wire:navigate>
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />

                    </a>
                </div>
                <!-- Logo and H1 combined properly -->
                <h1 class="text-xl font-semibold text-gray-800">Northern Luzon Adventist Hospital</h1> <!-- Styled for visibility -->
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-8 sm:-my-px sm:ml-10">
                <x-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')" wire:navigate>
                    {{ __('About Us') }}
                </x-nav-link>
                <x-nav-link :href="route('ourservices')" :active="request()->routeIs('ourservices')" wire:navigate>
                    {{ __('Our Services') }}
                </x-nav-link>
                <x-nav-link :href="route('news&events')" :active="request()->routeIs('news&events')" wire:navigate>
                    {{ __('New & Events') }}
                </x-nav-link>

                @auth
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                @else
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                        {{ __('Book an Appointment') }}
                    </x-nav-link>
                @endauth
            </div>

            <!-- Login/Signup and other actions on the right -->
            <div class="hidden sm:flex items-center ml-auto">
                @if (Route::has('login'))
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                        {{ __('Log In') }}
                    </x-nav-link>
                @endif
            </div>

            <!-- Settings Dropdown for Authenticated Users -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile')" wire:navigate>
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <button wire:click="logout" class="w-full text-left">
                                <x-dropdown-link>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </button>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <!-- Hamburger for Mobile -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')" wire:navigate>
                {{ __('About Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('ourservices')" :active="request()->routeIs('ourservices')" wire:navigate>
                {{ __('Our Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('news&events')" :active="request()->routeIs('news&events')" wire:navigate>
                {{ __('News & Events') }}
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @else
                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                    {{ __('Register') }}
                </x-responsive-nav-link>
                @if (Route::has('login'))
                    <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                        {{ __('Log In') }}
                    </x-responsive-nav-link>
                @endif
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                    <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile')" wire:navigate>
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <button wire:click="logout" class="w-full text-left">
                        <x-responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            </div>
        @endauth
    </div>
</nav>
