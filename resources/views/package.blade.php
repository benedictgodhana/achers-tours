<!DOCTYPE html>
<html lang="en">
<head>

<link rel="icon" href="{{ asset('images/logo_medium_3-removebg-preview.png') }}" type="image/x-icon">

    <title>{{$tour->name}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



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


</style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>
   <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('/images/logo_medium_3-removebg-preview.png') }}" alt="Pacific Travel Agency" style="height: 40px;">
</a>


     <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li  class="nav-item "><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item "><a href="/faqs" class="nav-link">FAQs</a></li>


  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle mr-4" id="informationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Information
    </a>
    <ul class="dropdown-menu nav-item" aria-labelledby="informationDropdown">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('category.show', $category->id) }}" class="dropdown-item">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</li>



                    <li class="nav-item"><a href="/login" class="nav-link">Account</a></li>


				</ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('storage/' . $tour->image) }}');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1>{{ $tour->name }}</h1>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section">
   <div class="container">
      <div class="row">
         <!-- Tour Description on the Left -->
         <div class="col-md-6">
            <h1 class="toolbar-title">{{ $tour->name }}</h1>
            <div class="description-box" style="color:black;">
               {!! $tour->description !!}
            </div>
         </div>

         <!-- Tour Packages on the Right -->
         <div class="col-md-6">
            <h2 class="text-center">Packages Available for {{ $tour->name }}</h2>
            <div class="row">
               @foreach ($tour->packages as $package)
               <div class="col-md-6 ftco-animate">
                  <div class="project-wrap">
                     <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" class="img-fluid">
                     <div class="text p-3">
                        <h3><a href="#">{{ $package->name ?? 'No Title' }}</a></h3>
                        <p class="description">{!! Str::limit($package->description, 100, '...') !!}</p>
                        <div class="d-flex justify-content-between">
                        <a href="{{ route('package.details', $package->id) }}" class="btn "  style="background:orange">Read More</a>


                        </div>
                     </div>
                  </div>
               </div>





               @endforeach
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

        <div class="d-flex align-items-center mb-4">
            <h2 class="ftco-heading-2" style="color:white">About Archers Tours & Travel</h2>
        </div>
        <img src="/images/logo_medium_3-removebg-preview.png" alt="Archers Tours & Travel Logo" class="mr-3" style="width: 250px; height: 50px;">
        <br>
        <br>

        <p style="color:white">Discover unparalleled travel experiences with Archers Tours & Travel. From adventure-packed excursions to serene beach getaways, we bring you closer to your dream destinations.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://www.facebook.com/ArchersToursandTravel"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/archerstourstravel/"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>

      <div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
        <h2 class="ftco-heading-2" style="color:white">Information</h2>
        <ul class="list-unstyled" style="color:white">
            @foreach ($categories as $category)
                <li><a href="{{ route('category.show', $category->id) }}" class="py-2 d-block" style="color:white">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2" style="color:white">Have Questions?</h2>
        <div class="block-23 mb-3">
            <ul class="list-unstyled">
                <li style="color:white;">Peponi Plaza, Mwanzi Road - Westlands</li>
                <li style="color:white;">P.O. Box 437, 00606 Nairobi - Kenya - East Africa</li>
                <li><a href="#" style="color:white;">+254-20-3752472 / 0722394892</a></li>
                <li><a href="#" style="color:white;">archers@archerstours.com</a></li>
            </ul>
        </div>
    </div>
</div>


   <div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2" style="color:white">Experiences</h2>
        <ul class="list-unstyled">
            <li><p class="py-2 d-block" style="color:white">Adventure Tours</p></li>
            <li><p class="py-2 d-block" style="color:white">Luxury Resorts</p></li>
            <li><p class="py-2 d-block" style="color:white">Beach Escapes</p></li>
            <li><p class="py-2 d-block" style="color:white">Nature Trails</p></li>
            <li><p class="py-2 d-block" style="color:white">Camping Trips</p></li>
            <li><p class="py-2 d-block" style="color:white">Event Planning</p></li>
        </ul>
    </div>
</div>
    </div>
 <div class="row">
  <div class="col-md-12 text-center">

  <p style="color:white">
      &copy; <script>document.write(new Date().getFullYear());</script> Archers Tours & Travel | All rights reserved | Powered  by <a href="https://donkraft.co.ke/" target="_blank" style="color:white"  >DONKRAFT IT SOLUTIONS LTD</a>
    </p>
  </div>
 </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
<script>
 document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.inquire-btn').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const packageId = this.getAttribute('data-package-id');
            document.getElementById('package_id').value = packageId;
            $('#inquiryModal').modal('show');
        });
    });
});

    // Handle form submission
    document.getElementById('inquiryForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch('{{ route('send.enquiry') }}', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Inquiry submitted successfully!');
                $('#inquiryModal').modal('hide');
            } else {
                alert('An error occurred. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

</script>
</body>
</html>
