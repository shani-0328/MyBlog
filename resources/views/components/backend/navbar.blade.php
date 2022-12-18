<nav class="bg-gray-800" x-data="{show_mobile_menu: false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu toggle button(burger button)-->
                <button type="button" @click="show_mobile_menu = !show_mobile_menu"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>


            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                <a class="flex-shrink-0 flex items-center" href="#">
                    <img class="h-8 w-auto"
                         src="{{asset('img/log.jpg')}}" alt="Workflow">

                    <span class="ml-2 hidden lg:block w-auto text-gray-300 hover:text-white">Shanika Wijenayake</span>
                </a>

                <!-- Desktop Menu-->
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-backend.navbar.navs></x-backend.navbar.navs>
                    </div>
                </div><!-- End of Desktop Menu-->
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <button
                    class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </button>

                <!-- Auth User -->
                <div class="ml-3 relative" x-data="{ profile_dropdown: false }"
                     @click="profile_dropdown= !profile_dropdown">
                    <!-- Profile Picture-->
                    <div>
                        <button type="button"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                 src="{{asset('img/aq.jpg')}}"
                                 alt="">
                        </button>
                    </div>

                    <!-- Profile dropdown -->
                    <div x-show="profile_dropdown" style="display: none"
                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="{{route('user-profile')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                           id="user-menu-item-0">Your Profile</a>
                        <a href="{{route('backend.user.password.change')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                           id="user-menu-item-0">Change Password</a>
                        <a href="{{route('backend.config.index')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                           id="user-menu-item-1">Settings</a>
                        <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                           id="user-menu-item-2">Sign out</a>
                    </div>
                </div><!-- End of Auth User-->
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="show_mobile_menu" style="display: none">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-backend.navbar.navs :isMobile="true"></x-backend.navbar.navs>
        </div>
    </div>
</nav>
