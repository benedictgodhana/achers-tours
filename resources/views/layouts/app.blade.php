<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Apply Poppins font */
            body, a, button {
                font-family: 'Poppins', sans-serif;
            }

            /* Vuetify-inspired styling */
            body {
                background-color: #f5f5f5;
            }

            /* Sidebar with elevated look */
            #sidebar {
                box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out;
                background-color: orange;
            }

            /* Elevated header */
            header {
                background: white;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
            }

            /* Modern button styling */
            a, button {
                transition: background-color 0.2s, box-shadow 0.2s;
            }

            a:hover, button:hover {
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            /* Sidebar Links */
            .sidebar-link {
                padding: 12px 16px;
                border-radius: 8px;
                transition: background-color 0.2s;
                font-size: 12px;
                font-weight: 900;
            }

            .sidebar-link:hover {
                background-color:white;
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
            <aside class="w-64 bg-white shadow-md h-screen transition-transform transform -translate-x-64 md:translate-x-0" id="sidebar">
                <!-- Logo -->
                <div class="p-6 sidebar-logo">
                    <img src="/images/logo_medium_3-removebg-preview.png" alt="App Logo">
                </div>

                <div class="p-6 flex flex-col">
                    <ul class="space-y-4">
                        <li>
                            <a href="/dashboard" class="sidebar-link flex items-center {{ request()->is('users') ? 'sidebar-active' : '' }}">
                                <span class="fa fa-users mr-3"></span> Manage Users
                            </a>
                        </li>
                        <li>
                            <a href="/packages" class="sidebar-link flex items-center {{ request()->is('packages') ? 'sidebar-active' : '' }}">
                                <span class="fa fa-box-open mr-3"></span> Packages
                            </a>
                        </li>
                        <li>
                            <a href="/profile" class="sidebar-link flex items-center {{ request()->is('profile') ? 'sidebar-active' : '' }}">
                                <span class="fa fa-user-circle mr-3"></span> Profile
                            </a>
                        </li>
                        <li>
                            <a href="/blogs" class="sidebar-link flex items-center {{ request()->is('blogs') ? 'sidebar-active' : '' }}">
                                <span class="fa fa-blog mr-3"></span> Manage Blogs
                            </a>
                        </li>
                        <li>
                            <a href="/settings" class="sidebar-link flex items-center {{ request()->is('settings') ? 'sidebar-active' : '' }}">
                                <span class="fa fa-cogs mr-3"></span> Settings
                            </a>
                        </li>
                        <li>
                            <a href="/logout" class="sidebar-link flex items-center">
                                <span class="fa fa-sign-out-alt mr-3"></span> Logout
                            </a>
                        </li>
                    </ul>

                    <footer class="mt-8">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                        All rights reserved.
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
                <main class="p-6">
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
