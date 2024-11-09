<!doctype html>
<html lang="en">
<head>
    <title>{{ $blog->title }} - Archer's Tours and Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('Template/css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        .container{
            max-width: 1500px;
            width:100%;
        }
    </style>
</head>
<body>

<nav class=" w-full  navbar px-4    shadow-md rounded-md lg:px-8 lg:py-3 mt-1" style="background:orange">
  <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
    <a href="#" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
    <img src="/images/logo_medium_3-removebg-preview.png" alt="Archer's Tours Logo" style="height: 50px;">

    </a>

    <div class="hidden lg:block">
      <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">

      <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600" style="color:black">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500" style="color:black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 3l9 6.75M12 3v18m-7.5-8.25v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5m6 0v6.75a.75.75 0 00.75.75h3a.75.75 0 00.75-.75V13.5"/>
  </svg>

  <a href="/" class="flex items-center">
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

<!-- Blog Detail Section -->
<div class="container  pt-5">
    <h1 class="text-center" style="font-size:26px;font-weight:bold">{{ $blog->title }}</h1>
    <p class="text-center text-muted">
        By {{ $blog->author }} on {{ $blog->created_at->format('M d, Y') }}
    </p>
    <img src="{{ asset('storage/' . $blog->image) }}"
         class="img-fluid w-100 mb-4"
         alt="{{ $blog->title }}"
         style="object-fit: cover; max-height: 300px;border-radius:30px;;">
    <div class="blog-content ">
        {!! $blog->content !!}
    </div>
    <a href="/blog" class="btn btn-secondary mt-3">Back to Blogs</a>
</div>

<!-- Comment Section -->
<div class="container mt-5">
    <h3>Leave a Comment</h3>
    <form action="/comments" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
    </form>
</div>
<br>

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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('Template/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('Template/js/main.js') }}"></script>

</body>
</html>
