<!DOCTYPE html>
<html lang="en">
<head>
@foreach($blogs as $blog)
    <title>{{ $blog->title }} - Archer's Tours and Travel</title>
@endforeach

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Link CSS files in Laravel Blade template -->
<link rel="stylesheet" href="{{ asset('pacific-main/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/style.css') }}">
<script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>

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


.container{
    max-width: 1500px   ;
    width:100%;
}

    .marquee-wrapper {
        overflow: hidden;
        position: relative;
    }

    .carousel-logos {
        display: flex;
    }

    .carousel-logos .item {
        flex: 0 0 auto;
        margin-right: 30px; /* Add space between logos */
    }

    .logo-img {
        width: 150px; /* Adjust the logo size */
        height: auto;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    /* Ensure that the logos fit within the container */
.carousel-logos {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: nowrap;
    overflow: hidden;
}

.item {
    flex: 1 0 auto; /* Allow the logos to be flexible but prevent them from growing too large */
    padding: 10px; /* Add some padding between logos */
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-img {
    max-width: 100%; /* Make sure logos scale responsively */
    height: auto; /* Maintain aspect ratio */
    max-height: 60px; /* Limit maximum height to avoid logos becoming too large */
}

/* Optional: Add a responsive media query to make the logos adjust on smaller screens */
@media (max-width: 768px) {
    .logo-img {
        max-height: 40px; /* Reduce logo size for smaller screens */
    }
}
.hero-wrap {
    position: relative;
    height: 40vh; /* Reduced height to 40% of the viewport height */
    background-size: cover; /* Ensure the image covers the section */
    background-position: center center; /* Center the background image */
    background-repeat: no-repeat;
}

.hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay for better readability */
}

.hero-wrap .slider-text {
    position: absolute;
    bottom: 10%; /* Align text near the bottom */
    left: 50%;
    transform: translateX(-50%); /* Center text horizontally */
    color: #fff;
    z-index: 2;
}

.hero-wrap .breadcrumbs {
    font-size: 14px;
    margin-bottom: 10px;
}


</style>

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
   <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('/images/logo_medium_3-removebg-preview.png') }}" alt="Pacific Travel Agency" style="height: 40px;">
</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li  class="nav-item "><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>



                    <li class="nav-item"><a href="/login" class="nav-link">Account</a></li>


				</ul>
     </div>
   </div>
 </nav>
 <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs">
          <span class="mr-2">
            <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
          </span>
          <span>{{ $blog->category?->name ?? 'Category' }} <i class="fa fa-chevron-right"></i></span>
        </p>
        <h1 class="mb-0 bread">{{ $blog->category?->name ?? 'Category' }}</h1>
        <p class="text-center" style="font-size:12px;font-weight:800">
          By {{ $blog->author }} on {{ $blog->created_at->format('M d, Y') }}
        </p>
      </div>
    </div>
  </div>
</section>


<section class="container my-5">
  <div class="row justify-content-center">
    <!-- Blog Content -->
    <div class="col-md-8">
      <div class="blog-content" style="color:black">
        {!! $blog->content !!}
      </div>
    </div>
  </div>
</section>

<section class="container my-5">
  <div class="row justify-content-center">
    <!-- Comment Section -->
    <div class="col-md-8">
      <h3>Comments</h3>

      <!-- Displaying existing comments -->
      <div class="existing-comments mb-4">
        @foreach ($blog->comments as $comment)
          <div class="comment mb-3">
            <p style="color:black"><strong>{{ $comment->author }}</strong> - <small>{{ $comment->created_at->format('M d, Y') }}</small></p>
            <p style="color:black">{{ $comment->content }}</p>
          </div>
        @endforeach
      </div>


      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

      <!-- Add Comment Form -->
      <form action="{{ route('blog.comments.store', $blog->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="author" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" placeholder="Write your comment here..." required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit Comment</button>
</form>

    </div>
  </div>
</section>

<section class="ftco-section logo-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading" style="color:orange">In partnership with</span>
            </div>
        </div>

        <div class="row ftco-animate">
            <div class="col-md-12">
                <!-- Add marquee effect using CSS animation -->
                <div class="marquee-wrapper">
                    <div class="carousel-logos">
                        <!-- Repeat for each company logo -->
                        <div class="item">
                            <img src="/images/logo_kata.png" alt="Company 1 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <img src="/images/png-transparent-iata-hd-logo.png" alt="Company 2 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <a href="https://payments.pesapal.com/archersafrica" target="_blank" rel="noopener noreferrer">
                                <img src="/images/imag4.png" alt="Company 3 Logo" class="logo-img">
                            </a>
                        </div>
                        <div class="item">
                            <img src="/images/Untitled.jpeg" alt="Company 5 Logo" class="logo-img">
                        </div>
                        <!-- Add more logos as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background:navy;color:white"
>
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2" style="color:white">About Archers Tours & Travel</h2>
          <p style="color:white">Discover unparalleled travel experiences with Archers Tours & Travel. From adventure-packed excursions to serene beach getaways, we bring you closer to your dream destinations.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
          <h2 class="ftco-heading-2" style="color:white">Information</h2>
          <ul class="list-unstyled" style="color:white">
            <li><a href="#" class="py-2 d-block" style="color:white">Online Enquiry</a></li>
            <li><a href="#" class="py-2 d-block" style="color:white">General Enquiries</a></li>
            <li><a href="#" class="py-2 d-block" style="color:white">Booking Conditions</a></li>
            <li><a href="#" class="py-2 d-block" style="color:white">Privacy Policy</a></li>
            <li><a href="#" class="py-2 d-block" style="color:white">Refund Policy</a></li>
            <li><a href="/contact" class="py-2 d-block" style="color:white">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
       <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2" style="color:white">Experiences</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block" style="color:white">Adventure Tours</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Luxury Resorts</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Beach Escapes</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Nature Trails</a></li>
          <li><a href="#" class="py-2 d-block"  style="color:white">Camping Trips</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Event Planning</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2" style="color:white">Have Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class=" fa fa-map-marker mr-4" style="color:orange;"></span><span style="color:white" class="mr-4">Peponi Plaza, Peponi Road - Westlands</span></li>
           <li><span class=" fa fa-map-marker mr-4" style="color:orange"></span><span style="color:white"> P.O. Box 437, 00606 Nairobi - Kenya - East Africa</span></li>

           <li><a href="#" ><span class=" fa fa-phone mr-4" style="color:orange"></span><span  style="color:white">+254-20-3752472 /3 /4</span></a></li>
           <li><a href="#"><span class=" fa fa-paper-plane mr-4" style="color:orange"></span><span style="color:white">info@archerstours.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p style="color:white">
      &copy; <script>document.write(new Date().getFullYear());</script> Archers Tours & Travel | All rights reserved | Designed  by <a href="https://colorlib.com" target="_blank" style="color:white"  >DONKRAFT IT SOLUTIONS LTD</a>
    </p>
  </div>
 </div>
</div>
</footer>




<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            },
            'google_translate_element'
        );
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!-- Link JavaScript files in Laravel Blade template -->
<script src="{{ asset('pacific-main/js/jquery.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/popper.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('pacific-main/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('pacific-main/js/google-map.js') }}"></script>
<script src="{{ asset('pacific-main/js/main.js') }}"></script>

</body>
</html>
