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
    from { opacity: 0; }
    to { opacity: 1; }
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
.container{
    max-width: 1500px   ;
    width:100%;
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
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 3l9 6.75M12 3v18m-7.5-8.25v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5m6 0v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5"/>
  </svg>

  <a href="#" class="flex items-center">
    Home
  </a>
</li>


        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 110 20 10 10 0 010-20zm-.75 7.5a.75.75 0 011.5 0v4a.75.75 0 01-1.5 0v-4zm0 7.25a.75.75 0 101.5 0 .75.75 0 00-1.5 0z"/>
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

  <a href="/tour" class="flex items-center">
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




<li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3" />
  </svg>

  <a href="/blog" class="flex items-center">
    Blogs
  </a>
</li>

        <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black" >
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

<!-- Slider -->
<div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(/images/50-facts-about-tanzania-1688354960.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center mb-16">
                            <h2>Discover the World, One Adventure at a Time!</h2>
                            <h1 class="mb-3">Tanzania</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(Template/images/_methode_times_prod_web_bin_ee3ef81c-1280-487e-b48c-3527c77e4edd.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Your Dream Destination Awaits – Let&#39;s Make it Happen!</h2>
                            <h1 class="mb-3">Kenya</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(/images/Webp.net-compress-image-59.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>From Cityscapes to Seascapes – Travel Beyond Boundaries!</h2>
                            <h1 class="mb-3">RWANDA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <section>

 </section>

    <section class="container">

        <div class="slider" x-data="{start: true, end: false}" style="padding-top: 150px;">
        <strong>
                <p class="mb-4 text-center" style="font-size:18px">OUR SERVICES </p>
            </strong>
            <br>
            <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                <div class="slider__item">
                    <img class="slider__image" src="/images/businessman-with-phone-trolley-bag-standing-airport-terminal.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Business, tours and leisure travels management and ticketing</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/medium-shot-people-travel-agency-office.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Personalized advisory services on travel and tours organization</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/woman-military-personnel-tracking-enemy-vessels-coast-line-territory.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Personnel availability for emergency services 24/7</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/client-presents-passport-check-process-hotel-concierge-reviewing-id-info-validate-online-room-booking-executive-manager-travelling-business-trip-stays-five-star-resort.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <strong>
                                <p style="color:white">Hotels and resorts bookings (locally and internationally)</p>
                            </strong>

                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/colleagues-having-fun-business-event.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Organizing meetings and conferences</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/day-office-travel-agency.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Organizing pilgrimages and special interest groups</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/young-adults-traveling-london.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Local and international tour services</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/woman-spiritual-peaceful-summer-beach-concept.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Cruise bookings</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/smiling-commuter-interacting-with-airport-security-officer-while-collecting-accessories-from-crate.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Ground handling and meet & assist</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/paramedic-driving-ambulance-side-view.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Medical evacuation/repatriation on commercial airlines and air ambulance charters</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/travel-agent-offering-trip-planning-clients.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Travel policy consultancy and travel insurances</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/businesswoman-getting-taxi-cab.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Airport transfers (locally and internationally)</p>
                        </strong>
                    </div>
                </div>
                <div class="slider__item">
                    <img class="slider__image" src="/images/woman-with-red-car-her-hand.jpg" alt="Image">
                    <div class="slider__info">
                        <strong>
                            <p style="color:white">Car-hire (locally and internationally)</p>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="slider__nav" style="display: flex;justify-content: center;">
                <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <!-- <div class="description-section" id="description">
    <div class="container">
        <div class="row">
            <div class="col-md-12 description-text">
                <strong style="font-size: 30px; color: #003399;">Share the magic of Africa with us. Experience the best travel destinations with Archer's Tours and Travel, where your adventure begins!</strong>
            </div>
        </div>
    </div>
</div> -->




    <!--
<section class="container">
  <div class="card-grid">

    <a class="card" href="#">
      <div class="background"
        style="background-image: url(images/Serengeti-National-Park-Tanzania.jpg)">
      </div>
      <div class="content">
        <p class="category">Tanzania</p>
        <h3 class="heading">Serengeti National Park</h3>
        <p class="location-info"><i class="ion-ios-location"></i> Tanzania</p>
      </div>
    </a>

    <a class="card" href="#">
      <div class="background"
        style="background-image: url(images/maasai-mara-8.jpg)">
      </div>
      <div class="content">
        <p class="category">Kenya</p>
                        <h3 class="heading">Maasai Mara</h3>
                        <p class="location-info"><i class="ion-ios-location"></i> Kenya</p>

      </div>
    </a>

    <a class="card" href="#">
      <div class="background"
        style="background-image: url(images/asasff-750x450.jpg)">
      </div>
      <div class="content">
        <p class="category">Rwanda</p>
        <h3 class="heading">Volcanoes National Park</h3>
        <p class="location-info"><i class="ion-ios-location"></i> Rwanda</p>
      </div>
    </a>

    <a class="card" href="#">
      <div class="background"
        style="background-image: url(images/buhomalodge2-1.jpg)">
      </div>
      <div class="content">
        <p class="category">Uganda</p>
        <h3 class="heading">Bwindi Impenetrable Forest</h3>
        <p class="location-info" ><i class="ion-ios-location"></i> Uganda</p>
      </div>
    </a>

    <div>
</section> -->
    <section class="container mb-8">
    <strong>
                <p class="mb-4 text-center" style="font-size:18px">TESTIMONIALS </p>
            </strong>
            <br>
        <div class="testimonial-row">

            <!-- Testimonial 1 -->
            <div class="testimonial">
                <span class="open quote">“</span>
                <div class="image">
                    <div class="clip"></div>
                </div>
                <p style="font-size:12px">Hello, I just wanted to thank you for the wonderful assistance you were to me and my friend. We had a wonderful time and really liked our tour guide Pollycarp. He was a safe driver, a great spotter of animals, and my brother enjoyed talking to him. Thank you for your wonderful service, and we will always recommend you to others.</p>
                <div class="source">
                    <span>Jacque Burkholder</span>
                </div>
                <span class="close quote">”</span>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial" style="background:white">
                <span class="open quote">“</span>
                <div class="image">
                    <div class="clip"></div>
                </div>
                <p style="font-size:12px">We've just returned from an amazing trip to Finch Hattons, and I want to extend my heartfelt thanks to you and the entire Archers team for making it so memorable. Special appreciation goes to Stephen for his exceptional dedication and service, even on weekends and late hours. Finch Hattons was a “6 out of 5” experience—the beautiful setting, incredible service, luxurious rooms, and the best food we’ve had on safari. Yoga and massage with Mr. Jonathan were also highlights. Can’t wait for a chance to return!</p>
                <div class="source">
                    <span>Vivien</span>
                </div>
                <span class="close quote">”</span>
            </div>




            <!-- Testimonial 3 -->
            <div class="testimonial">
                <span class="open quote">“</span>
                <div class="image">
                    <div class="clip"></div>
                </div>
                <p style="font-size:12px">hi,
                    todays tour was amazing the driver
                    Polycap was great and was
                    excellent. I will recommend your
                    agency to everyone.
                    See you soon</p>
                <div class="source">
                    <span>Sarah Thompson</span>
                </div>
                <span class="close quote">”</span>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>

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
    </div>
    <!-- Footer Section -->
    <footer class=" text-light py-5" style="background:navy">
        <div class="container">
            <div class="row">
                <!-- Logo and Description -->
                <div class="col-md-4">
                    <img src="images/logo_medium_3-removebg-preview.png" alt="Archer's Tours Logo" style="height: 50px;">
                    <p class="mt-3">Archer's Tours and Travel offers the best travel experiences across Africa, where your adventure begins!</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <strong><p class="" style="color:orange">Quick Links</p></strong>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-light">Home</a></li>
                        <li><a href="/about.html" class="text-light">About</a></li>
                        <li><a href="#" class="text-light">Destinations</a></li>
                        <li><a href="#" class="text-light">Tours</a></li>
                        <li><a href="#" class="text-light">Contact</a></li>
                    </ul>
                </div>


                <!-- Contact and Location -->
                <div class="col-md-4">
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
