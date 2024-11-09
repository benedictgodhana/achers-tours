<!doctype html>
<html lang="en">

<head>
    <title>Archer's Tours and Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Poppins -->

    <!-- Other Stylesheets -->
    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('Template/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        .partners-marquee {
            overflow: hidden;
            white-space: nowrap;
            display: flex;
            align-items: center;
            position: relative;
        }


        title {
            font-size: 2.5rem;
            font-family: system-ui;
            line-height: 1.1;
            font-weight: 300;
            color: #fff;
            margin: 4rem auto 1rem;
            width: 85%;
            max-width: 1280px;
        }

        .slider {
            width: 85%;
            max-width: 1280px;
            margin: 0 auto;
        }

        .slider__content {
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            display: flex;
            gap: 1rem;
            padding-bottom: 1rem;
            scrollbar-color: var(--scrollcolor) var(--scrollbackground);
        }

        .slider__content::-webkit-scrollbar {
            height: 0.5rem;
            width: 0.8rem;
            border-radius: 1rem;
            background: var(--scrollbackground);
        }

        .slider__content::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background: var(--scrollcolor);
        }

        .slider__content::-webkit-scrollbar-track {
            border-radius: 1rem;
            background: var(--scrollbackground);
        }

        .slider__item {
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-width: 100%;
            width: 100%;
            border-radius: 1.25rem;
            overflow: hidden;
            position: relative;
            aspect-ratio: 1;
        }

        @media (min-width: 460px) {
            .slider__item {
                aspect-ratio: 0.6666666667;
                min-width: calc((100% / 2) - 2rem);
            }
        }

        @media (min-width: 940px) {
            .slider__item {
                min-width: calc((100% / 3) - 4rem);
            }
        }

        .slider__image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .slider__info {
            position: relative;
            padding: 4rem 2rem 2rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(32, 50, 57, 0));
        }

        .slider__info h2 {
            color: #fff;
            font-family: system-ui;
            line-height: 1.1;
            font-weight: 300;
            font-size: 1.75rem;
            margin: 0;
        }

        .slider__nav {
            margin: 1rem 0 4rem;
            width: 100%;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            gap: 1rem;
            align-content: center;
            align-items: center;
            pointer-events: none;
        }

        @media (min-width: 460px) {
            .slider__nav {
                justify-content: flex-end;
            }
        }

        .slider__nav__button {
            margin: 0;
            appearance: none;
            border: 0;
            border-radius: 2rem;
            background: #fff;
            color: #203239;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            line-height: 1;
            pointer-events: none;
            transition: 0.2s ease-out;
            opacity: 0.25;
        }

        .slider__nav__button--active {
            opacity: 1;
            pointer-events: auto;
            cursor: pointer;
        }


        .marquee-content {
            display: inline-flex;
            animation: scroll 20s linear infinite;
        }

        .partner-logo {
            height: 60px;
            margin: 0 30px;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .social-icons a {
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #f4a261;
            /* Change to the desired hover color */
        }

        .testimonial-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .testimonial {
            flex: 1 1 30%;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            max-width: 320px;
        }

        .testimonial .quote {
            font-size: 2rem;
            color: #f4a261;
        }

        .testimonial .open {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .testimonial .close {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .testimonial .image {
            position: relative;
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .testimonial .image img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial p {
            font-size: 14px;
            color: #333;
        }


        @media (max-width: 768px) {
            .testimonial-row {
                flex-direction: column;
            }

            .testimonial {
                max-width: 100%;
            }
        }


        .testimonial {
            width: 500px;
            display: flex;
            max-width: 100%;
            background: orange;
            padding: 4em 3em;
            display: flex;
            align-items: flex-end;
            position: relative;
            box-shadow: 0 2px 2px hsl(0deg 0% 0%/.075), 0 3px 3px hsl(0deg 0% 0%/.075), 0 5px 5px hsl(0deg 0% 0%/.075), 0 9px 9px hsl(0deg 0% 0%/.075), 0 17px 17px hsl(0deg 0% 0%/.075);
            position: relative;

            &:after {
                content: "";
                border: 8px solid navy;
                border-radius: 50px;
                width: 85%;
                height: 120%;
                position: absolute;
                z-index: -1;
                left: 1.5em;
                top: -2em;
            }

            &:before {
                content: "";
                position: absolute;
                bottom: -6.2em;
                left: 5em;
                z-index: 1;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 70px 100px 0 0;
                border-color: navy transparent transparent transparent;
            }

            .quote {
                position: absolute;
                font-size: 3em;
                width: 40px;
                height: 40px;
                background: navy;
                color: #fff;
                text-align: center;
                line-height: 1.25;

                &.open {
                    top: 0;
                    left: 0;
                }

                &.close {
                    bottom: 0;
                    right: 0;
                }
            }

            p {
                width: 60%;
                display: inline-block;
                font-weight: bold;
                font-size: 1.25em;
            }

            .source {
                width: 40%;
                height: 100%;
                position: relative;

                span {
                    display: inline-block;
                    font-weight: bold;
                    font-size: 1.15em;
                    position: relative;
                    margin-left: 1rem;
                    text-align: right;

                    &:before {
                        content: "\2014";
                        display: inline;
                        margin-right: 5px;
                    }
                }
            }

            .image {
                transform: rotate(-5deg);
                position: absolute;
                top: 0.5em;
                right: 1.5em;

                img {
                    border: 10px solid #fff;
                    margin: 0;
                    padding: 0;
                }

                .clip {
                    border: 2px solid #222;
                    border-right: none;
                    height: 75px;
                    width: 20px;
                    position: absolute;
                    right: 30%;
                    top: -15%;
                    border-radius: 25px;

                    &:before {
                        content: "";
                        position: absolute;
                        top: -1px;
                        right: 0;
                        height: 10px;
                        width: 16px;
                        border: 2px solid #222;
                        border-bottom: none;
                        border-top-left-radius: 25px;
                        border-top-right-radius: 25px;
                        z-index: 99;
                    }

                    &:after {
                        content: "";
                        position: absolute;
                        bottom: -1px;
                        right: 0;
                        height: 40px;
                        width: 16px;
                        border: 2px solid #222;
                        border-top: none;
                        border-bottom-left-radius: 25px;
                        border-bottom-right-radius: 25px;
                        z-index: 99;
                    }
                }
            }
        }


        .introduction-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 50px;
            text-align: center;
            overflow: hidden;
        }

        .intro-content {
            flex: 1 1 100%;
            padding: 20px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .intro-content h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        .intro-content p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.5;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
            animation-delay: 0.5s;
        }

        .learn-more-btn {
            text-decoration: none;
            color: #fff;
            background-color: #5a67d8;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
            opacity: 0;
            animation: fadeInUp 2s forwards;
            animation-delay: 1s;
        }

        .learn-more-btn:hover {
            background-color: #4c51bf;
        }

        .images-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 40px;
        }

        .intro-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s ease;
            animation: fadeIn 1.5s ease-in-out;
        }

        .intro-image:hover {
            transform: scale(1.1) rotate(2deg);
        }

        /* Fade-in animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            max-width: 1500px;
            width: 100%;
        }

        /* Base styling for the fade and slide-in effect */
.fade-slide-up {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.fade-slide-up.show {
    opacity: 1;
    transform: translateY(0);
}

/* Staggered delay for each list item */
.fade-slide-up:nth-child(1) { transition-delay: 0.1s; }
.fade-slide-up:nth-child(2) { transition-delay: 0.2s; }
.fade-slide-up:nth-child(3) { transition-delay: 0.3s; }
.fade-slide-up:nth-child(4) { transition-delay: 0.4s; }
.fade-slide-up:nth-child(5) { transition-delay: 0.5s; }
.fade-slide-up:nth-child(6) { transition-delay: 0.6s; }
.fade-slide-up:nth-child(7) { transition-delay: 0.7s; }

/* Styling for the Mission section */
#mission {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease 0.7s, transform 0.6s ease 0.7s;
}
#mission.show {
    opacity: 1;
    transform: translateY(0);
}

    </style>
</head>

<body>

    <nav class=" w-full  navbar px-4    shadow-md rounded-md lg:px-8 lg:py-3 mt-1" style="background:orange">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
            <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
                <img src="images/logo_medium_3-removebg-preview.png" alt="Archer's Tours Logo" style="height: 50px;">

            </a>

            <div class="hidden lg:block">
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">

                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 3l9 6.75M12 3v18m-7.5-8.25v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5m6 0v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5" />
                        </svg>

                        <a href="/" class="flex items-center">
                            Home
                        </a>
                    </li>


                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 110 20 10 10 0 010-20zm-.75 7.5a.75.75 0 011.5 0v4a.75.75 0 01-1.5 0v-4zm0 7.25a.75.75 0 101.5 0 .75.75 0 00-1.5 0z" />
                        </svg>

                        <a href="/about" class="flex items-center">
                            About Us
                        </a>
                    </li>

                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.75c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9s-9 4.03-9 9c0 4.97 4.03 9 9 9zm0 0s4.5-4.5 4.5-7.5c0-2.48-2.02-4.5-4.5-4.5s-4.5 2.02-4.5 4.5c0 3 4.5 7.5 4.5 7.5z" />
                        </svg>

                        <a href="/destination" class="flex items-center">
                            Destinations
                        </a>
                    </li>

                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25c5.376 0 9.75 4.374 9.75 9.75s-4.374 9.75-9.75 9.75-9.75-4.374-9.75-9.75S6.624 2.25 12 2.25zm0 1.5a8.25 8.25 0 1 0 0 16.5 8.25 8.25 0 0 0 0-16.5zm0 3a5.25 5.25 0 0 1 5.25 5.25c0 .77-.152 1.502-.42 2.174l-3.079-1.026a3 3 0 0 0-2.252-2.252L10.5 8.07A5.245 5.245 0 0 1 12 6.75z" />
                        </svg>

                        <a href="#" class="flex items-center">
                            Tours
                        </a>
                    </li>


                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9v8.25c0 1.518 1.232 2.75 2.75 2.75h11c1.518 0 2.75-1.232 2.75-2.75V9m-16.5 0h16.5M3.75 9l8.25-5.25L20.25 9M9.75 9V5.25M14.25 9V5.25M5.25 12.75h4.5m5.25 0h4.5m-14.25 3.75h15" />
                        </svg>

                        <a href="#" class="flex items-center">
                            Packages
                        </a>
                    </li>



                    </li>

                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 5.25c0-1.242 1.008-2.25 2.25-2.25h1.59c.927 0 1.772.52 2.175 1.342l.914 1.83c.39.78.22 1.718-.42 2.31l-1.073.99a.992.992 0 0 0-.228 1.09c.918 2.15 2.842 4.073 4.992 4.992a.992.992 0 0 0 1.09-.228l.99-1.073c.592-.64 1.53-.81 2.31-.42l1.83.914c.822.403 1.342 1.248 1.342 2.175v1.59c0 1.242-1.008 2.25-2.25 2.25h-.75C9.407 21.75 2.25 14.593 2.25 6v-.75Z" />
                        </svg>

                        <a href="/contact" class="flex items-center">
                            Contact
                        </a>
                    </li>

                    <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        <a href="/login" class="flex items-center">
                            Account
                        </a>
                </ul>
            </div>
            <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
                <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </span>
            </button>
        </div>
    </nav>

    <div class="relative isolate overflow-hidden bg-white px-6 py-4 sm:py-32 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                <defs>
                    <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
            </svg>
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">About us</h1>
                    </div>
                </div>
            </div>
            <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="/images/passport-camera-maps.jpg" alt="">
            </div>
            <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base/7 text-gray-700 lg:max-w-lg">
                        <p>Archer’s Tours & Travels Ltd. is a Kenyan company based in Nairobi, with over 70 years of experience in
                            organizing business missions, leisure travels and vacations.</p>
                        <p>Archer’s Tours & Travels Ltd. team provides an efficient and tailor-made service to every client, thereby
                            maintaining its position of leadership in the industry.</p>
                        <ul role="list" class="mt-8 space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <!-- Circle to represent target -->
        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" fill="none" />
        <!-- Cross lines for a target look -->
        <line x1="4" y1="12" x2="20" y2="12" stroke="currentColor" stroke-width="1.5" />
        <line x1="12" y1="4" x2="12" y2="20" stroke="currentColor" stroke-width="1.5" />
        <!-- Arrow symbol -->
        <path d="M12 2 L13.5 8 L10.5 8 L12 2 Z" fill="currentColor" />
        <!-- Smaller circle for center point -->
        <circle cx="12" cy="12" r="2" fill="currentColor" />
    </svg>
    <span>
        <strong class="font-semibold text-gray-900">Professionalism in Archery & Travel:</strong> Expertise in archery and travel, ensuring precision and customer satisfaction.
    </span>
</li>
<li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <!-- Shield symbol for protection and integrity -->
        <path d="M12 2C7.588 2 4 5.588 4 10v4c0 3.488 2.636 6.392 6.064 6.937L12 22l1.936-1.063C17.364 20.392 20 17.488 20 14v-4c0-4.412-3.588-8-8-8z" fill="none" stroke="currentColor" stroke-width="1.5"/>
        <!-- Arrow inside shield -->
        <path d="M12 6L10 10h4l-2-4z" fill="currentColor"/>
        <!-- Compass lines for guidance -->
        <line x1="12" y1="14" x2="12" y2="18" stroke="currentColor" stroke-width="1.2"/>
        <line x1="10" y1="16" x2="14" y2="16" stroke="currentColor" stroke-width="1.2"/>
    </svg>
    <span>
        <strong class="font-semibold text-gray-900">Integrity in Archery & Travel:</strong> Upholding honesty and ethics in every action.
    </span>
</li>
<li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <!-- Outer ring of the target -->
        <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.5"/>
        <!-- Middle ring of the target -->
        <circle cx="12" cy="12" r="5" fill="none" stroke="currentColor" stroke-width="1"/>
        <!-- Inner bullseye -->
        <circle cx="12" cy="12" r="2" fill="currentColor"/>
        <!-- Arrow pointing to the center -->
        <path d="M18 6L12 12M14.5 6.5L18 6 17.5 9.5" fill="currentColor" stroke="currentColor" stroke-width="1"/>
    </svg>
    <span>
        <strong class="font-semibold text-gray-900">Accuracy in Archery & Travel:</strong>  Precision in every detail to meet customer goals.
    </span>
</li>


<li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <!-- Arrow shaft -->
        <path d="M4 12h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        <!-- Arrowhead -->
        <path d="M15 10l3 2-3 2V10Z" fill="currentColor"/>
        <!-- Speed lines -->
        <path d="M3 8h6M3 16h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
    </svg>
    <span>
        <strong class="font-semibold text-gray-900">Efficiency:</strong> Streamlined processes for optimized outcomes.
    </span>
</li>
<li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path d="M8 12c0-1.1.9-2 2-2h4c1.1 0 2 .9 2 2v4c0 1.1-.9 2-2 2h-4c-1.1 0-2-.9-2-2v-4Z" fill="currentColor"/>
        <path d="M12 2a5 5 0 0 0-5 5v3c0 .55-.45 1-1 1h-2c-.55 0-1 .45-1 1v3h6v-3c0-.55-.45-1-1-1H9v-3a3 3 0 1 1 6 0v3h-1c-.55 0-1 .45-1 1v3h6v-3c0-.55-.45-1-1-1h-2c-.55 0-1-.45-1-1V7a5 5 0 0 0-5-5Z" fill="currentColor"/>
    </svg>
    <span><strong class="font-semibold text-gray-900">Commitment:</strong>Dedicated to goals, building trusted partnerships.</span>
</li>
<li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path d="M12 3a5 5 0 0 1 5 5c0 3.5-5 8-5 8s-5-4.5-5-8a5 5 0 0 1 5-5Z" fill="currentColor"/>
        <path d="M5 21v-1c0-1.11.89-2 2-2h10c1.11 0 2 .89 2 2v1H5Z" fill="currentColor"/>
    </svg>
    <span><strong class="font-semibold text-gray-900">Respect:</strong>Valuing individuals and fostering a compassionate environment.</span>
</li>
<li class="flex gap-x-3">
    <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path d="M12 2L3 6v6c0 5 4 9 9 9s9-4 9-9V6l-9-4Z" fill="currentColor"/>
        <path d="M10.5 13.5L8 11l-1.5 1.5L10.5 16l5-5L14 9l-3.5 4.5Z" fill="#fff"/>
    </svg>
    <span><strong class="font-semibold text-gray-900">Accountability:</strong>Taking responsibility, ensuring transparency and trust.</span>
</li>



<h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Our Mission</h2>
<p class="mt-6">To be an easy and friendly company to deal with, understanding client’s requirements and to offer simple, quick
and efficient solutions to everyone’s need.</p>
<p>We commit in providing competent, cost effective, reliable, dedicated and knowledgeable personalized
services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Partners Section -->
    <section class="partners bg-light py-5">
        <div class="container text-center">
            <strong>
                <p class="mb-4" style="font-size:18px">MEMBER OF </p>
            </strong>
            <div class="partners-marquee">
                <div class="marquee-content">
                    <img src="/images/png-transparent-iata-hd-logo.png" alt="Partner 1" class="partner-logo">
                    <img src="/images/Untitled.jpeg" alt="Partner 2" class="partner-logo">
                    <img src="/images/logo_kata.png" alt="Partner 3" class="partner-logo">
                    <img src="/images/imag4.png" alt="Partner 4" class="partner-logo">
                    <img src="/images/unnamed-1-768x244.jpg" alt="Partner 5" class="partner-logo">
                    <!-- Add more partner logos as needed -->
                </div>
            </div>
        </div>
    </section>

    <!--
    <div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:800px; width:100;border-radius:30px">
        <div class="modal-content">
        <div class="modal-header" style="background-color:orange; color: white;">
            <h5 class="modal-title" id="welcomeModalLabel" style="text-align:center"><strong>Welcome to Archer's Tours and Travel</strong></h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="text-center mt-3">
            <img src="images/logo_medium_3-removebg-preview.png" alt="Archers Tours Logo" >
            </div>
            <br>
            <p style="font-size: 18px; color:black;">Thank you for visiting! Explore the best travel destinations in Africa and beyond with Archer's Tours and Travel. We're here to make your adventures unforgettable.</p>

        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #003399;border-radius:30px;width:100%">Start Exploring</button>
        </div>
        </div>
    </div>
    </div> -->
    <!-- Footer Section -->
    <footer class=" text-light py-5" style="background:navy">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-md-2">
                    <img src="images/logo_medium_3-removebg-preview.png" alt="Archer's Tours Logo" style="height: 50px;">
                    <p class="mt-3">Archer's Tours and Travel offers the best travel experiences across Africa, where your adventure begins!</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-2">
                    <strong><p class="" style="color:orange">Quick Links</p></strong>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-light">Home</a></li>
                        <li><a href="/about.html" class="text-light">About</a></li>
                        <li><a href="#" class="text-light">Destinations</a></li>
                        <li><a href="#" class="text-light">Tours</a></li>
                        <li><a href="#" class="text-light">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <strong><p class="" style="color:orange">Tours</p></strong>
                    <p>Direct: +254-722-394892</p>
                    <p>Mobile : +254-722-394892</p>
                    <p>Email: stephen@archersafrica.com</p>
                </div>

                <div class="col-md-2">
                    <strong><p class="" style="color:orange">Travel</p></strong>
                    <p>Direct: +254-733-964994</p>
                    <p>Mobile: +254-720-865455 +254-733-964994</p>
                    <p>Email: archers@archersafrica.com</p>
                </div>

                <!-- Contact and Location -->
                <div class="col-md-3">
                <strong><p class="" style="color:orange">Location and Contact</p></strong>
                    <p>Peponi Plaza, Peponi Road - Westlands</p>
                    <p>P.O. Box 437, 00606 Nairobi - Kenya - East Africa</p>
                    <p>Email: archers@archersafrica.com</p>
                    <p>Phone: +254-720-865455 +254-733-964994</p>

                    <!-- Social Media Icons -->
                    <div class="social-icons ">
                        <a href="https://facebook.com" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Archer's Tours and Travel. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Other sections like footer or additional content go here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Template/js/main.js') }}"></script>

    <script>
        // Show description section with animation
        window.onload = function() {
            const descriptionSection = document.getElementById('description');
            descriptionSection.classList.add('show');
        };
    </script>

    <script>
        // Function to change the navbar background on scroll
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) { // If scrolled 50px from the top
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>


    <script>
        $(document).ready(function() {
            // Show the modal after 2 seconds
            setTimeout(function() {
                $('#welcomeModal').modal('show');
            }, 2000);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>

</body>

</html>
