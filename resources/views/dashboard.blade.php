<x-app-layout>
    <div class="h-screen flex flex-col">
        <div class="flex-1 overflow-hidden p-4 md:p-6 lg:p-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-9">
                <!-- Analytical Card 1: Total Users -->
                <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white shadow-lg rounded-lg p-6 hover:scale-105 transition-transform duration-300">
                    <a href="{{ route('users.index') }}" class="block">
                        <h3 class="text-lg font-semibold flex items-center">
                            <i class="fa fa-users mr-2"></i>Total Users
                        </h3>
                        <p class="text-3xl font-bold mt-4">{{ $usersCount }}</p>
                    </a>
                    <p class="mt-2">View and manage all registered users.</p>
                    <a href="{{ route('users.index') }}" class="mt-4 inline-block bg-white text-blue-700 rounded-lg px-4 py-2 hover:bg-blue-100">Go to Users</a>
                </div>

                <!-- Analytical Card 2: Total Destinations -->
                <div class="bg-gradient-to-r from-green-500 to-green-700 text-white shadow-lg rounded-lg p-6 hover:scale-105 transition-transform duration-300">
                    <a href="{{ route('destinations.index') }}" class="block">
                        <h3 class="text-lg font-semibold flex items-center">
                            <i class="fa fa-map mr-2"></i>Total Destinations
                        </h3>
                        <p class="text-3xl font-bold mt-4">{{ $destinationsCount }}</p>
                    </a>
                    <p class="mt-2">Explore and manage all travel destinations.</p>
                    <a href="{{ route('destinations.index') }}" class="mt-4 inline-block bg-white text-green-700 rounded-lg px-4 py-2 hover:bg-green-100">Go to Destinations</a>
                </div>

                <!-- Analytical Card 3: Total Tours -->
                <div class="bg-gradient-to-r from-red-500 to-red-700 text-white shadow-lg rounded-lg p-6 hover:scale-105 transition-transform duration-300">
                    <a href="{{ route('tours.index') }}" class="block">
                        <h3 class="text-lg font-semibold flex items-center">
                            <i class="fa fa-globe mr-2"></i>Total Tours
                        </h3>
                        <p class="text-3xl font-bold mt-4">{{ $toursCount }}</p>
                    </a>
                    <p class="mt-2">Manage all available tours for customers.</p>
                    <a href="{{ route('tours.index') }}" class="mt-4 inline-block bg-white text-red-700 rounded-lg px-4 py-2 hover:bg-red-100">Go to Tours</a>
                </div>

                <!-- Analytical Card 4: Total Packages -->
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white shadow-lg rounded-lg p-6 hover:scale-105 transition-transform duration-300">
                    <a href="{{ route('packages.index') }}" class="block">
                        <h3 class="text-lg font-semibold flex items-center">
                            <i class="fa fa-suitcase mr-2"></i>Total Packages
                        </h3>
                        <p class="text-3xl font-bold mt-4">{{ $packagesCount }}</p>
                    </a>
                    <p class="mt-2">Check and manage all travel packages.</p>
                    <a href="{{ route('packages.index') }}" class="mt-4 inline-block bg-white text-yellow-700 rounded-lg px-4 py-2 hover:bg-yellow-100">Go to Packages</a>
                </div>

                <!-- Analytical Card 5: Total Blogs -->
                <div class="bg-gradient-to-r from-purple-500 to-purple-700 text-white shadow-lg rounded-lg p-6 hover:scale-105 transition-transform duration-300">
                    <a href="{{ route('blogs.index') }}" class="block">
                        <h3 class="text-lg font-semibold flex items-center">
                            <i class="fa fa-newspaper mr-2"></i>Total Blogs
                        </h3>
                        <p class="text-3xl font-bold mt-4">{{ $blogsCount }}</p>
                    </a>
                    <p class="mt-2">Manage all blogs published on the platform.</p>
                    <a href="{{ route('blogs.index') }}" class="mt-4 inline-block bg-white text-purple-700 rounded-lg px-4 py-2 hover:bg-purple-100">Go to Blogs</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
