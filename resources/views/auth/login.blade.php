<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | iLabAfrica Item Requisition System</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/style.css') }}">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6739b5892480f5b4f59f415b/1icsmq95h';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>

    <!--End of Tawk.to Script-->

    <style>

        .navbar-nav .nav-link {
            font-size: 0.9rem; /* Slightly smaller font */
        }
        .navbar-nav .dropdown-menu {
            font-size: 0.9rem; /* Match dropdown font size */
        }

        /* Responsive adjustment for smaller screens */
        @media (max-width: 992px) {
            .navbar-nav {
                flex-direction: column; /* Stack items vertically on smaller screens */
            }
            .navbar-nav .nav-item {
                padding: 5px 0; /* Reduce padding for mobile */
            }
        }

        .modal-content {
            background: linear-gradient(135deg, orange, orange);
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        /* Header and logo */
        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 10px;
        }

        .modal-logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Close button styling */
        .close {
            color: #fff;
            opacity: 1;
        }

        /* Form input and button styling */
        .form-group label {
            color: white;
            font-weight: bold;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }

        .form-control::placeholder {
            color: #ddd;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            border-color: #ffd700;
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        }

        /* Submit button styling */
        .btn-submit {
            background-color: navy;
            color: white;
            border: none;
            font-weight: bold;
            width: 100%;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            color: white;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .modal-content {
                padding: 15px;
            }
            .modal-title {
                font-size: 1.3rem;
            }
        }

        .background-image-container {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 100vh; /* Adjust height as needed */
        }

        .background-image-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4); /* Adjust the color and opacity as needed */
            z-index: 1;
        }

        /* Ensures content appears above the dimmed background */
        .background-image-container > * {
            position: relative;
            z-index: 2;
            color: white; /* Optional, makes text easier to read on dark overlay */
        }

        .hero-wrap {
            position: relative;
            width: 100%;
            height: 100vh; /* Full height */
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the video covers the full background without distortion */
            z-index: -1; /* Ensure the video is behind the content */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Optional dark overlay to enhance text visibility */
            z-index: 1; /* Place the overlay above the video but below the text */
        }

        .container {
            position: relative;
            z-index: 2; /* Ensure text content is on top */
            color: #fff; /* White text for visibility */
        }

        .slider-text {
            padding: 60px 0;
            text-align: left;
        }

        .subheading {
            font-size: 34px;
            font-weight: bold;
        }

        h1.mb-4 {
            font-size: 48px; /* Customize font size for better visibility */
            font-weight: bold;
        }

        .caps {
            text-transform: uppercase;
            font-size: 20px;
        }

        p {
            color: black;
        }

        /* Styling the blog entry container */
        .blog-entry {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Ensuring the image inside the block-20 takes up enough space */
        .block-20 {
            width: 100%;
            height: 350px; /* Adjust height to make the image more prominent */
            background-size: cover;
            background-position: center;
        }

        /* Adjusting padding and margins for text inside the card */
        .blog-entry .text {
            padding: 20px; /* Increase padding for more spacious content */
        }

        .blog-entry h3 a {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        .blog-entry h3 a:hover {
            color: #ff5733; /* Change color on hover */
        }

        .blog-entry .btn {
            background-color: orange;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 1rem;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .blog-entry .btn:hover {
            background-color: #ff5733; /* Darken the button color on hover */
        }
    </style>

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

        <!-- Password Field with View Password Toggle -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-2 relative">
                <input id="password" name="password" type="password" autocomplete="current-password" required
                       class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-sm leading-5 text-gray-500">
                    <i id="passwordToggleIcon" class="fa fa-eye"></i>
                </button>
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Remember Me Checkbox -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                       class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>
            <div class="text-sm">
                <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Forgot your password?
                </a>
            </div>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg">
                Sign in
            </button>
        </div>
    </form>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const passwordToggleIcon = document.getElementById('passwordToggleIcon');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        passwordToggleIcon.classList.toggle('fa-eye');
        passwordToggleIcon.classList.toggle('fa-eye-slash');
    });
</script>

</body>
</html>
