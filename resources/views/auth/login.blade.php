<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | iLabAfrica Item Requisition System</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="h-screen bg-gradient-to-r from-blue-50 to-indigo-100 flex items-center justify-center">

<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
    <!-- Logo -->
    <div class="text-center">
        <a href="/">
            <img class="mx-auto h-14 w-auto" src="/images/logo_medium_3-removebg-preview.png" alt="iLabAfrica">
        </a>
        <h2 class="mt-6 text-3xl font-extrabold text-gray-800">Sign in to your account</h2>
        <p class="mt-2 text-sm text-gray-600">Welcome back! Please enter your details.</p>
    </div>

    <!-- Login Form -->
    <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required
                       class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Password Field -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required
                       class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Remember Me and Forgot Password -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox"
                       class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot password?</a>
            @endif
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full flex justify-center rounded-lg bg-indigo-600 py-2 px-4 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Sign in
            </button>
        </div>
    </form>

    <!-- Additional Footer Info -->
    <div class="mt-6 text-center text-sm text-gray-600">
        Don’t have an account? <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:underline">Sign up</a>
    </div>
</div>

</body>
</html>
