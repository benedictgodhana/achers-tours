<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IlabAfrica Item Requisition System') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Apply Poppins font */
        body,
        a,
        button {
            font-family: 'Poppins', sans-serif;
        }

        /* Vuetify-inspired styling */
        body {
            background-color: #f5f5f5;
            overflow: hidden;
            /* Prevent scrolling on the body */
        }

        /* Sidebar with elevated look */
        #sidebar {
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background-color:orange;
            height: 100vh;
            /* Full height for sidebar */
            overflow-y: auto;
            /* Allow scrolling in the sidebar */
        }

        /* Elevated header */
        header {
            background: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
        }

        /* Modern button styling */
        a,
        button {
            transition: background-color 0.2s, box-shadow 0.2s;
        }

        a:hover,
        button:hover {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar Links */
        .sidebar-link {
            padding: 12px 16px;
            border-radius: 8px;
            transition: background-color 0.2s;
            font-size: 12px;
            font-weight: 900;
            color:black;
        }

        .sidebar-link:hover {
            background-color: white;
            color: #1e88e5;
        }

        .sidebar-active {
            background-color: #2196f3;
            color: white;
        }

        /* Logo Styling */
        .sidebar-logo img {
            max-width: 200px;
            margin: 0 auto;
            display: block;
            height: 60px;
        }

        /* Footer text */
        footer {
            margin-top: auto;
            text-align: center;
            color: #9e9e9e;
            font-size: 12px;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700" id="sidebar">
            <!-- Logo -->
            <div class="p-6 sidebar-logo mt-16">
                <img src="/images/logo_medium_3-removebg-preview.png" alt="IlabAfrica Logo" style="height:90px">
            </div>

            <div class="p-4 flex flex-col">
                <ul class="space-y-4">
                    <li>
                        <a href="/dashboard" class="sidebar-link flex items-center {{ request()->is('dashboard') ? 'sidebar-active' : '' }}">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/destinations" class="sidebar-link flex items-center {{ request()->is('destinations') ? 'sidebar-active' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 6.25 7 13 7 13s7-6.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5 14.5 7.62 14.5 9 13.38 11.5 12 11.5z"/>
            </svg>
            Manage Destinations                       </a>
                    </li>
                    <li>
                        <a href="/tours" class="sidebar-link flex items-center {{ request()->is('tours') ? 'sidebar-active' : '' }} flex">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M21 2H3v2h18V2zm-6 10H3v2h12v-2zm-7 4H3v2h5v-2zm3-8H3v2h8V8zm12 6h-7v8h-2v-8h-2v10h-2v-8h-2v8H3v2h18v-2h-2v-8z"/>
            </svg>
            Manage Tours
                        </a>
                    </li>
                    <li>
                        <a href="/packages" class="sidebar-link flex items-center {{ request()->is('packages') ? 'sidebar-active' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10 1l-6 6h12l-6-6zm7 5H3l-1 5h18L17 6zm-3.08 9l-1.41-1.41L10 15.34l-2.51-2.75-1.41 1.41L10 18.41l3.92-3.41z"/>
            </svg>
            Packages
                        </a>
                    </li>

                    <li>
                        <a href="/blogs" class="sidebar-link flex items-center {{ request()->is('blogs') ? 'sidebar-active' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 3C7.03 3 3 7.03 3 12s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm2 13H6v-2h8v2zm4-4H6v-2h12v2zm0-4H6V6h12v2z"/>
            </svg>
            Manage Blogs                      </a>
                    </li>


                    <li>
                        <a href="/users" class="sidebar-link flex items-center {{ request()->is('users') ? 'sidebar-active' : '' }}">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z" />
                                </svg>
                            </div>
                            User Management
                        </a>
                    </li>

                    <li>
                        <a href="/profile" class="sidebar-link flex items-center {{ request()->is('profile') ? 'sidebar-active' : '' }}">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            Profile
                        </a>


                    </li>

                    <li>
                        <a href="/settings" class="sidebar-link flex items-center {{ request()->is('settings') ? 'sidebar-active' : '' }}">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>

                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="route('logout')" class="sidebar-link flex items-center ">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            Logout
                        </a>
                    </li>
                </ul>

                <footer class="mt-8">
                    Copyright &copy; <script>
                        document.write(new Date().getFullYear());
                    </script>
                    IlabAfrica. All rights reserved.
                </footer>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main class="p-6 mt-16">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('sidebarCollapse');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-64');
        });
    </script>
</body>

</html>
