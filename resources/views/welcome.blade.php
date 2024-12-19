<!DOCTYPE html>
<html lang="en">
<head>
	<title>Archers Tours and Travel</title>
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
        color:white;
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
        color:white;
        font-weight: bold;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color:white;
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
        background-color:navy;
        color:white;
        border: none;
        font-weight: bold;
        width:100%;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
        color:white;
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

p{
    color:black;
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

    .carousel-destination {
    display: flex;
    justify-content: space-around; /* Distribute items evenly across the center */
    flex-wrap: wrap;
    margin: 0 -10px; /* Reset margin for better spacing */
}

.carousel-destination .item {
    flex: 1 1 calc(33.333% - 20px); /* Adjust width and spacing */
    margin: 10px; /* Space between items */
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
  <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
  <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
  <li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
  <li class="nav-item mr-4"><a href="/contact" class="nav-link">Contact</a>
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

  <li class="nav-item mr-4"><a href="/login" class="nav-link">Account</a></li>

</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap js-fullheight">
    <!-- Video background -->
    <video autoplay loop muted class="hero-video">
        <source src="/images/458134_Lion_Lions_1920x1080.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <span class="subheading" style="font-size:34px">Welcome to Archers Tours & Travel</span>
                <h1 class="mb-4">Share the magic of Africa with us</h1>
                <p class="caps" style="text-transform:none">From majestic safaris to stunning landscapes, Africa is a world of wonder waiting to be explored</p>
            </div>
        </div>
    </div>
</div>



		<section class="ftco-section services-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
				<div class="w-100">
					<span class="subheading" style="color:orange">Welcome to Archers Tours & Travel</span>
					<h2 class="mb-4">Embark on Your Next Adventure with Us</h2>
                    <p>We are a Tours and Travel company based in Nairobi, Kenya, with over 70 years experience in
organizing safaris, beach holidays and travel requirements for visitors from all over the world.
Our talent is a result of an accumulation of past experience, our aim to tailor travels to individual
requests and personas, and an ability to be both flexible and efficient in our travel programmes.
Our team is equipped to satisfy the travel needs of visitors from all over the world.</p>
					<p><a href="/destination" class="btn  py-3 px-4" style="background:navy;color:white;border-radius:30px">Explore Destinations</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row" >
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-1 d-block" style="border-radius: 30px; overflow: hidden;">

                <div class="media-body">
                    <h3 class="heading mb-3">Our Travel/Ticketing services</h3>
                    <ul class="text-white">
                        <li>Flight Ticket Bookings</li>
                        <li>Train and Rail Passes</li>
                        <li>Events and Attraction Tickets</li>
                        <li>Cruise Reservations</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-2 d-block" style="border-radius: 30px; overflow: hidden;">

                <div class="media-body">
                    <h3 class="heading mb-3">Tour Organization</h3>
                    <ul class="text-white">
                        <li>Guided Tours</li>
                        <li>Customized or Tailor-Made Tours</li>
                        <li>Adventure Tours</li>
                        <li>City Tours</li>
                        <li>Pilgrimages Tours</li>
                        <li>Cultural and Heritage Tours</li>
                        <li>Eco and Sustainable Tours</li>
                        <li>Cruise and Expedition Tours</li>
                        <li>Corporate and Incentive Travel</li>
                        <li>Transportation and Airport Transfers</li>
                        <li>Travel Insurance and Safety Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
    <div class="services services-1 color-3 d-block" style="border-radius: 30px; overflow: hidden;">

        <div class="media-body">
            <h3 class="heading mb-3">Ground Handling</h3>
            <ul class="text-white">
                <li>Airport Transfers and Transportation</li>
                <li>Luggage Handling</li>
                <li>Ticketing and Check-in Assistance</li>
                <li>Travel Documentation Assistance</li>
                <li>Tour Escort and Local Guide Services</li>
                <li>Hotel and Accommodation Arrangements</li>
                <li>Event and Conference Handling</li>
            </ul>
        </div>
    </div>
</div>

        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-4 d-block" style="border-radius: 30px; overflow: hidden;">

                <div class="media-body">
                    <h3 class="heading mb-3">Transport Services</h3>
                    <ul class="text-white">
                        <li>Transport Services</li>
                        <li>VIP Meet &amp; Greet</li>
                        <li>Car rentals</li>
                        <li>Private Coach hires</li>
                        <li>4x4 Vehicles transport</li>
                        <li>Charter flights</li>
                        <li>Helicopter Rides</li>

                    </ul>
                </div>
            </div>
        </div>				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section img ftco-select-destination" style="background-image: url('pacific-main/images/bg_3.jpg');">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading" style="color:orange">Archers Tours and Travel Provide Places</span>
                <h2 class="mb-4">Select Your Destination</h2>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-destination owl-carousel ftco-animate">
                    @foreach ($destinations as $destination)
                        <div class="item">
                            <div class="project-destination">
                                <a href="/destination/{{ $destination->id }}" class="img" style="background-image: url({{ asset('storage/' . $destination->image) }});border-radius:30px">
                                    <div class="text">
                                        <h3 style="background:orange">{{ $destination->name }}</h3>
                                        <span style="background:orange">{{ $destination->tours_count }} Tours</span> <!-- Display the tour count -->
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading" style="color:orange">Destination</span>
                <h2 class="mb-4">Tour Destination</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($tours as $tour)
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap" >
                        <a href="#" class="img" style="background-image: url({{ asset('storage/' . $tour->destination->image) }});border-radius:30px">
                        </a>
                        <div class="text p-4">
                            <span class="days" style="color:orange">{{ $tour->duration }} Days Tour</span>
                            <h3><a href="#">{{ $tour->name }}</a></h3>
                            <p class="location" style="color:orange"><span class="fa fa-map-marker" style="color:orange"></span> {{ $tour->destination->name }}</p>
                            <ul>
                                <li><span class="flaticon-shower" style="color:orange"></span></li>
                                <li><span class="flaticon-king-size" style="color:orange"></span></li>
                                <li><span class="flaticon-sun-umbrella" style="color:orange"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

		<section class="ftco-section ftco-about img"style="background-image: url('/images/Property Overview.jpg');">
			<div class="overlay"></div>
			<div class="container py-md-5">
				<div class="row py-md-5">

				</div>
			</div>
		</section>

		<section class="ftco-section ftco-about ftco-no-pt img">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-12 about-intro">
						<div class="row">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url('/images/crossroad-car-safari-scene.jpg');border-radius:30px">
								</div>
							</div>
							<div class="col-md-6 pl-md-5 py-5">
								<div class="row justify-content-start pb-3">
									<div class="col-md-12 heading-section ftco-animate">
										<span class="subheading" style="color:orange">About Us</span>
										<h2 class="mb-4">Make Your Tour Memorable and Safe with Archers Tours and Travel</h2>
<p>At Archers Tours and Travel, we believe that every journey should be an unforgettable experience. Whether you're exploring the wild landscapes or experiencing new cultures, we ensure your travel is safe, enjoyable, and seamless. Let us guide you on your next adventure with expert planning and personal attention to every detail. Far from the ordinary, we offer journeys that inspire and memories that last a lifetime.</p>
<p><a href="/destination" class="btn " style="background:orange;color:white">View our Destination</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <section class="ftco-section testimony-section bg-bottom" style="background-image: url(pacific-main/images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Testimonials by Destination</h2>
            </div>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
            <div class="col-md-4 d-flex align-items-stretch mb-4">
                <div class="testimony-wrap py-4" style="border-radius: 30px; background: white; width: 100%;">
                    <div class="text">
                        <p class="star" style="color:orange">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">
                            {!! $testimonial->message !!}
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="pl-3">
                                <p class="name">{{ $testimonial->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading" style="color:orange">General Information</span>
                <h2 class="mb-4">Recent Post</h2>
            </div>
        </div>
        <div class="row d-flex">
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end w-100">
                        <!-- Display the blog image -->
                        <a href="{{ route('blog.show', $blog->id) }}" class="block-20"
                           style="background-image: url('{{ asset('storage/' . $blog->image) }}');
                                  height: 350px;
                                  background-size: cover;
                                  background-position: center;
                                  border-radius:30px">
                        </a>
                        <div class="text p-4">
                            <div class="d-flex align-items-center mb-4 topp" style="background:orange;color:white">
                                <div class="one">
                                    <span class="day" style="background:orange;color:white">{{ $blog->created_at->format('d') }}</span>
                                </div>
                                <div class="two" style="background:orange;color:white">
                                    <span class="yr">{{ $blog->created_at->format('Y') }}</span>
                                    <span class="mos">{{ $blog->created_at->format('F') }}</span>
                                </div>
                            </div>
                            <!-- Display the blog title -->
                            <h3 class="heading" style="font-size: 1.5rem; line-height: 1.5; font-weight: bold;">
                                <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                            </h3>
                            <!-- Display the "Read more" button with a check for category existence -->
                            <p>
                                @if($blog->category && $blog->category->id)
                                    <a href="{{ route('category.show', $blog->category->id) }}"
                                       class="btn"
                                       style="background:orange;color:white; font-size: 1rem; padding: 10px 20px;">
                                       Read more
                                    </a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




		<!-- Intro Section -->
<section class="ftco-intro ftco-section ftco-no-pt" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(pacific-main/images/bg_2.jpg);border-radius:30px">
                    <div class="overlay"></div>
                    <h2>We Are Archers Tours & Travel</h2>
                    <p style="color:white">We can help you plan your dream safari and travel adventures in Africa, ensuring a once-in-a-lifetime experience with expert guides and personalized itineraries.</p>
                    <p class="mb-0"><a href="#" class="btn  px-4 py-3" data-toggle="modal" data-target="#quoteModal" style="background:orange;color:white">Request A Quote</a></p>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Logo addition -->
                <h5 class="modal-title" id="quoteModalLabel">Request A Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to collect user info -->
                <form id="quoteForm">
                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" id="userName" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="userPhone">Phone Number (Optional)</label>
                        <input type="text" class="form-control" id="userPhone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="userMessage">Message</label>
                        <textarea class="form-control" id="userMessage" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>





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
    <img
        src="images/logo_medium_3-removebg-preview.png"
        alt="Archers Tours Logo"
        class="img-fluid"
        style="max-width: 100%; height: auto;">
</div>

            <br>
            <p style="font-size: 18px; color:black;">Thank you for visiting! Explore the best travel destinations in Africa and beyond with Archer's Tours and Travel. We're here to make your adventures unforgettable.</p>

        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn " data-dismiss="modal" style="background-color:navy;border-radius:30px;width:100%;color:white">Start Exploring</button>
        </div>
        </div>
    </div>
    </div>

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
        @if($category)
            <li>
                <a href="{{ route('category.show', $category->id) }}" class="py-2 d-block" style="color:white">
                    {{ $category->name }}
                </a>
            </li>
        @endif
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
$('#quoteForm').on('submit', function(e) {
    e.preventDefault();

    var userName = $('#userName').val();
    var userEmail = $('#userEmail').val();
    var userPhone = $('#userPhone').val();
    var userMessage = $('#userMessage').val();

    // Send the data to the server using AJAX
    $.ajax({
        type: 'POST',
        url: '/send-quote-request', // Laravel route to handle email sending
        data: {
            name: userName,
            email: userEmail,
            phone: userPhone,
            message: userMessage,
            _token: '{{ csrf_token() }}' // CSRF token for Laravel
        },
        success: function(response) {
            alert('Your quote request has been submitted successfully!');
            $('#quoteModal').modal('hide');
        },
        error: function() {
            alert('An error occurred. Please try again.');
        }
    });
});
</script>


<script>

    $(document).ready(function () {
        // Check if the modal has been seen
        if (!localStorage.getItem('welcomeModalSeen')) {
            // Show the modal after 2 seconds
            setTimeout(function () {
                $('#welcomeModal').modal('show');
            }, 2000);

            // Set localStorage when the modal is shown
            $('#welcomeModal').on('shown.bs.modal', function () {
                localStorage.setItem('welcomeModalSeen', 'true');
            });
        }
    });
</script>


<script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>


		</body>
		</html>
