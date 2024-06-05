<div>
    <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: true }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                @guest
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="/" class="mb-1 text-xl font-bold tracking-widest text-gray-900 rounded-lg">Talent<span
                                class="text-gray-500">Connect</span></a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                @endguest
                {{-- fddsf --}}
                @auth
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="#" onclick="location.reload();"
                            class="mb-1 text-xl font-bold tracking-widest text-gray-900 rounded-lg">Talent<span
                                class="text-gray-500">Connect</span></a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                @endauth

                <nav :class="{ 'flex': !open, 'hidden': open }"
                    class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row pt-2">
                    @guest
                        <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('blog') ? 'text-gray-900 bg-gray-200' : 'text-gray-700 bg-transparent' }}"
                            href="/blog">Blog</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('contact') ? 'text-gray-900 bg-gray-200' : 'text-gray-700 bg-transparent' }}"
                            href="/contact">Contact</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('about') ? 'text-gray-900 bg-gray-200' : 'text-gray-700 bg-transparent' }}"
                            href="/about">About</a>
                        <div class="flex items-center mt-2 md:mt-0 md:ml-4">
                            <a class="px-4 py-2 text-sm font-semibold bg-gray-500 rounded-lg text-white hover:bg-gray-600 focus:outline-none focus:shadow-outline"
                                href="/get-started">Register</a>
                            <a class="px-4 py-2 ml-2 text-sm font-semibold bg-gray-800 rounded-lg text-white hover:bg-gray-900 focus:outline-none focus:shadow-outline"
                                href="{{ route('login.show') }}">Login</a>
                        </div>
                    @endguest
                    @auth <a
                            class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('company/dashboard') ? 'text-gray-900 bg-gray-200' : 'text-gray-700 bg-transparent' }}"
                            href="/company/dashboard">Dashboard</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('blog') ? 'text-gray-900 bg-gray-200' : 'text-gray-700 bg-transparent' }}"
                            href="/blog">Blog</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('company/dashboard/notifications') ? 'text-gray-900 bg-gray-200' : 'text-gray-700 bg-transparent' }}"
                            href="/company/dashboard/notifications">Notifications</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="px-4 py-2 ml-2 text-sm font-semibold bg-gray-800 rounded-lg text-white hover:bg-gray-900 focus:outline-none focus:shadow-outline"
                                type="submit">Logout</button>
                        </form>
                    @endauth
                </nav>
            </div>
        </div>
    </div>
</div>
