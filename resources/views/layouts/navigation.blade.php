<nav class="fixed top-0 left-0 w-full z-10" style="background:darkblue">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">


                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>

                        <div class="relative ml-3" x-data="{ open: false }" @click.outside="open = false">
                            <button type="button" @click="open = !open" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white">
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>

                            <div x-show="open" class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg" x-transition>
                                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="block px-4 py-2 text-sm text-gray-700" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
</a>
                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
